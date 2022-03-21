@extends('layouts.main')

@section('content')
<!DOCTYPE html> 
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
<html lang="en">
<head>
	<title>King Of Pasta</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="{{ asset('js/jquery.js') }}"></script> 
	<script src="{{ asset('js/jquery.glide.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <script type="text/javascript" src="{{ asset('js/MyJQ.js') }}"></script>
    <script src="{{ asset('js/jquery.localScroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/jquery.scrollTo.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script> 

<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
new WOW().init();
</script>


</head>
<body>

<!--============ Navigation ============-->

<div class="headerwrapper">
	<div id="header" class="container">
		<div class="logo"> <a href="#"><img src="images/LOGO.png" alt="logo" width="165" height="74"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#map">LOCATONS</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->



<!--============ Slider ============-->


<div class="sliderwrapper">
      <div id="slider" class="container">
           <div class="slider">
      			<ul class="slides">
    		 	 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">the word pasta is generally used to describe traditional Italian noodles, which differentiates 
                              it from other types of noodles around the world. Pasta is made from unleavened dough consisting of ground durum wheat and water or eggs. 
                              The use of durum wheat sets pasta 
                              apart from other forms of noodles</p>
                      <img src="{{ asset('images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slide1img"> 
                      </li>
      			 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">the word pasta is generally used to describe traditional Italian noodles, which differentiates 
                              it from other types of noodles around the world. Pasta is made from unleavened dough consisting of ground durum wheat and water or eggs. 
                              The use of durum wheat sets pasta 
                              apart from other forms of noodles</p>
                      <img src="{{ asset('images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
     			 	  <li class="slide">
                      	<h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                      	<p class="wow fadeInUp" data-wow-delay="0.8s">the word pasta is generally used to describe traditional Italian noodles, which differentiates 
                              it from other types of noodles around the world. Pasta is made from unleavened dough consisting of ground durum wheat and water or eggs. 
                              The use of durum wheat sets pasta 
                              apart from other forms of noodles</p>
                      <img src="{{ asset('images/slideimg.png') }}" width="317" height="256" class="wow fadeInRight" 
                      data-wow-delay="0.8s" alt="slideimg2"> 
                      </li>
        		  </ul>
            </div>
      </div> <!-- End of Slider-->
</div> <!-- end of sliderwrapper-->
</html>