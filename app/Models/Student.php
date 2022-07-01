<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model //model definition
{
    protected $table='student'; //eloquent will create a student model to store records in the student table 
    protected $primaryKey='nim'; //calling DB content with primary key

    protected $fillable =[
        'nim',
        'name',
        'class_id',
        'major',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class);
    }
};