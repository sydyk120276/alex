@extends('layouts.layout')



@section('main')

<section class="main">
    <div class="image image1"></div>
    <div class="image image2"></div>
    <div class="image image3"></div>
<div class="container">
    <div class="main__title">
        <h1> Making Software a<br> Reality. </h1>
        <p>Just Think. We'll do the rest. </p>
        <div class="main__title-link">
            <a href="#">Get in touch</a>
        </div>
    </div>
</div>
</section>

@endsection

@section('content')


  <!-- ABOUTUS  START-->

  <section class="about_us">
    <div class="container">
     <div class="container-right">
     <div class="row">
         <div class="about_us__title col-lg-5">
             <h2> About us</h2>
             <div>
                 <b>We crossed the world to build Axel. Now, Axel is always right at your side to build something for you!</b> <br>                    
                 <span>You hear some crazy stories about folks meeting online, but you won’t hear a story crazier than Axel.
                     Phil lived in New York, and Adi lived on the other side of the globe in Bishkek, Kyrgyzstan. 
                     Their paths crossed online as they worked on mutual projects. They made a great team with 
                     Phil handling the front-end, mobile development while Adi worked his magic as a back-end developer.
                     After a while, Phil thought it would be nice to take a week-long trip to Central Asia and meet his
                     online coworker. That week soon turned into two full years of Phil and Adi building something really special. The result? Axel. 
                 </span>
                 <a href="#">View More</a>          
             </div>
         </div>
         <div class="col-lg-5">
             <img height="50%" width="100%" src="/assets/front/img/Business-meeting.svg" alt="">
         </div>
     </div>
    </div> 
    </div> 
 </section>

<!-- ABOUTUS  END-->


@endsection