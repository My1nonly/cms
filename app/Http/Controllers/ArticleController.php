<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use PDF;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')){
            $image_name = $request->file('image')->store('image','public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_iamge' => $image_name,
        ]);
        return redirect()->route('articles.index')
        ->with('success', 'Articles Succcessfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' =>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->content = $request->content;

        if ($article->featured_image && file_exist(storage_path('app/public' . $article->feature_image))){
            storage::delete('public/' . $article->featured_image);
        }
        $image_name = $request->file('image', 'public');
        $article->featured_image = $image_name;

        $article->save();
        return refirect()->route('article.index')
        ->with('success', 'Article Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    
    public function print_pdf(){
        $articles = Article::all();
        $pdf = PDF::loadview('articles.articles_pdf', ['articles'=>$articles]);
        return $pdf->stream();
    }
}
