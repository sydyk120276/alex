@extends('layouts.layout')

@section('title', 'Alex :: Home')


@section('main')

<div class="main">
    <img class="image image1" src="{{ $mains[0]->getImage() }}" alt="">
    <img class="image image2" src="{{ $mains[0]->getThumbnail2() }}" alt="">
    <img class="image image3" src="{{ $mains[0]->getThumbnail3() }}" alt="">
<div class="container position-relative">
    <div class="main__title">
        <h1 class="main__title-item _anim-item _anim-no-hide">{{ $mains[0]->title_item }} </h1>
        <p class="main__title-descr _anim-item _anim-no-hide">{{  html_entity_decode(strip_tags($mains[0]->description)) }}</p>
        <div class="main__title-link _anim-item _anim-no-hide">
            <a href="#">{{ $mains[0]->description_button }}</a>
        </div>
    </div>
    {{-- <div class="burger-menu position-absolute">
        <a class="nav-link active" href="#">{{  $headers[0]->link1 }}</a>
        <a class="nav-link" href="#">{{  $headers[0]->link2 }}</a>
        <a class="nav-link" href="#">{{  $headers[0]->link3 }}</a>
        <a class="nav-link" href="#">{{  $headers[0]->link4 }}</a>
        <button class="nav-link-button">
            <a class="nav-link" href="#">{{  $headers[0]->link5 }}</a>   
        </button>      
    </div> --}}
</div>
</div>

@endsection

@section('content')

  <!-- ABOUTUS  START-->

  <section class="about_us" id="about_us">
    <div class="container">
     <div class="container-right">

     <div class="row">
        @if ($abouts->count() > 0)
    <?php $about = $abouts[0]; ?>
    <div class="col-lg-5">
        <div class="about_us__title _anim-item _anim-no-hide">
            <h2>{{ $about->title }}</h2>
            <div>
                <b>{{ strip_tags($about->description) }}</b> <br>                    
                <span>
                    {{ strip_tags($about->content) }}
                </span>
                <a href="https://axelhub.com/aboutus">View More</a>          
            </div>
        </div>
    </div>
    <div class="offset-lg-1 col-lg-5 _anim-item _anim-no-hide about_us__img">
        <img class="w-100 h-100" height="50" width="50" src="{{ $about->getImage() }}" alt="">
    </div>
@endif
     </div>
                 

    </div> 
    </div> 
 </section>

<!-- ABOUTUS  END-->


<!-- GALLERY  START-->


{{-- <section class="gallary">
    <div class="container-sm">
        <div class="container-right">
            <h2 class="text-center">Gallery</h2>
            <div class="gallary__grid">
                @foreach ($galleries as $image)
                    <figure class="gallary__grid-item gallary__grid-item-{{ $image->gridItem }}">
                        <a href="#">
                            <img height="50%" width="100%" src="{{ $image->getImage() }}" alt="">
                        </a>
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}
<section class="gallary" id="gallary">
 <div class="container">
    @if(count($galleries) > 0)
         <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $galleries[0]->title }}</h2>
         @endif
         <div class="gallary__grid">
             <figure class="gallary__grid-item item-inimate-1 gallary__grid-item-3 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[0]->getImage() }}" alt="">
                 </a>
             </figure>
             <figure class="gallary__grid-item item-inimate-2 gallary__grid-item-2 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[1]->getImage() }}" alt="">
                 </a>
             </figure>
             <figure class="gallary__grid-item item-inimate-3 gallary__grid-item-3 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[2]->getImage() }}" alt="">
                 </a>
             </figure>
             <figure class="gallary__grid-item item-inimate-4 gallary__grid-item-2 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[3]->getImage() }}" alt="">
                 </a>
             </figure>
             <figure class="gallary__grid-item item-inimate-5 gallary__grid-item-3 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[4]->getImage() }}" alt="">
                 </a>
             </figure>
             <figure class="gallary__grid-item item-inimate-6 gallary__grid-item-3 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[5]->getImage() }}" alt="">
                 </a>
             </figure>
             <figure class="gallary__grid-item item-inimate-7 gallary__grid-item-2 _anim-item _anim-no-hide">
                 <a href="#">
                    <img height="50%" width="100%" src="{{ $galleries[6]->getImage() }}" alt="">
                 </a>
             </figure>
     </div>
 </div>
</section>

<!-- GALLERY  END-->


<!-- PROJECTS  START-->

<section class="projects" id="projects">
 <div class="container">
    @if(count($projects) > 0)
   <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $projects[0]->title }} </h2>
   @endif
   <div class="projects__grid">
         <a class="position-relative box a1 _anim-item _anim-no-hide" href="#">
            <img class="projects__grid-item" src="{{ $projects[0]->getImage() }}" alt="">
           <div class="box__content">
             <div class="box__logo">
                 <img class="box__logo-img" src="{{ $projects[0]->getLogo() }}" alt="">
             </div>
             <div class="box__descr">{{ html_entity_decode(strip_tags($projects[0]->description)) }}</div>
         </div>
           <div class="box__system ">
            <div class="projects-box-product-img">
           <img width="20" height="25" src="{{ $projects[0]->getPlatform1() }}" alt="">
            </div>
            <div class="projects-box-product-img">
           <img width="20" height="25" src="{{ $projects[0]->getPlatform2() }}" alt="">
         </div>
         </div>
         </a>
         <a class="position-relative box a2 _anim-item _anim-no-hide" href="#">
            <img class="projects__grid-item" src="{{ $projects[1]->getImage() }}" alt="">
           <div class="box__content">
             <div class="box__logo">
                <img class="box__logo-img" src="{{ $projects[1]->getLogo() }}" alt="">
             </div>
             <div class="box__descr">{{ html_entity_decode(strip_tags($projects[1]->description)) }}</div>
         </div>
         <div class="box__system ">
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[1]->getPlatform1() }}" alt="">
            </div>
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[1]->getPlatform2() }}" alt="">
          </div>
          </div>
         </a>
         <a class="position-relative box a3 _anim-item _anim-no-hide" href="#">
            <img class="projects__grid-item" src="{{ $projects[2]->getImage() }}" alt="">
           <div class="box__content">
             <div class="box__logo">
                <img class="box__logo-img" src="{{ $projects[2]->getLogo() }}" alt="">
             </div>
             <div class="box__descr">{{ html_entity_decode(strip_tags($projects[2]->description)) }}</div>
         </div>
         <div class="box__system ">
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[2]->getPlatform1() }}" alt="">
            </div>
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[2]->getPlatform2() }}" alt="">
          </div>
          </div>
         </a>
         <a class="position-relative box a4 _anim-item _anim-no-hide" href="#">
            <img class="projects__grid-item" src="{{ $projects[3]->getImage() }}" alt="">
           <div class="box__content">
             <div class="box__logo">
                <img class="box__logo-img" src="{{ $projects[3]->getLogo() }}" alt="">
             </div>
             <div class="box__descr">{{ html_entity_decode(strip_tags($projects[3]->description)) }}</div>
         </div>
         <div class="box__system ">
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[3]->getPlatform1() }}" alt="">
            </div>
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[3]->getPlatform2() }}" alt="">
          </div>
          </div>
         </a>
         <a class="position-relative box a5 _anim-item _anim-no-hide" href="#">
            <img class="projects__grid-item" src="{{ $projects[4]->getImage() }}" alt="">
           <div class="box__content">
             <div class="box__logo">
                <img class="box__logo-img" src="{{ $projects[4]->getLogo() }}" alt="">
             </div>
             <div class="box__descr">{{ html_entity_decode(strip_tags($projects[4]->description)) }}</div>
         </div>
         <div class="box__system ">
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[4]->getPlatform1() }}" alt="">
            </div>
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[4]->getPlatform2() }}" alt="">
          </div>
          </div>
         </a>
         <a class="position-relative box a6 _anim-item _anim-no-hide" href="#">
            <img class="projects__grid-item" src="{{ $projects[5]->getImage() }}" alt="">
           <div class="box__content">
             <div class="box__logo">
                <img class="box__logo-img" src="{{ $projects[5]->getLogo() }}" alt="">
             </div>
             <div class="box__descr">{{ html_entity_decode(strip_tags($projects[5]->description)) }}</div>
         </div>
         <div class="box__system ">
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[5]->getPlatform1() }}" alt="">
            </div>
            <div class="projects-box-product-img">
            <img width="20" height="25" src="{{ $projects[5]->getPlatform2() }}" alt="">
            </div>
          </div>
         </a>
</div>
 <!-- </div> -->
 </div>

</section>

<!-- PROJECTS  END-->


<!-- SERVICES  END-->

<section class="services" id="services">
<div class="container">
    @if(count($services) > 0)
 <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $services[0]->title }}</h2>
 @endif
 <div class="services__content">
    @foreach ($services as $service)
   <a href="https://axelhub.com/services/mobile" class="services__content-service-box service-box _anim-item _anim-no-hide">
     <div class="service-box-title">{{ $service->title_item }}</div>
     <div class="service-box-descr">{{ strip_tags($service->description) }}</div>
     <img class="service-box-img" src="{{ $service->getImage() }}" alt="">
     <div class="service-box-product">
        @if ($service->platform1 !== null)
         <div class="service-box-product-img">
            <img width="20" height="25" src="{{ $service->getPlatform1() }}" alt="">
         </div>
         @endif
         @if ($service->platform2 !== null)
         <div class="service-box-product-img">
            <img width="20" height="25" src="{{ $service->getPlatform2() }}" alt="">
         </div>
         @endif
         @if ($service->platform3 !== null)
         <div class="service-box-product-img">
            <img width="20" height="25" src="{{ $service->getPlatform3() }}" alt="">
         </div>
         @endif
         @if ($service->platform4 !== null)
         <div class="service-box-product-img">
            <img width="20" height="25" src="{{ $service->getPlatform4() }}" alt="">
         </div>
         @endif
         @if ($service->platform5 !== null)
         <div class="service-box-product-img">
            <img width="20" height="25" src="{{ $service->getPlatform5() }}" alt="">
         </div>
         @endif
         @if ($service->platform6 !== null)
         <div class="service-box-product-img">
            <img width="20" height="25" src="{{ $service->getPlatform6() }}" alt="">
         </div>
         @endif
     </div>
 </a>
 @endforeach
</div>
</div>
</section>

<!-- SERVICES  END-->


<!-- DEVELOPMENT  START-->

<section class="development" id="development">
 <div class="container">
        <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $developments[0]->title }}</h2>
        <div class="development__process-boxs ">
            @foreach ($developments as $index => $development)
                @if ($index % 2 === 0)
                    <div class="development__process-boxs-right _anim-item _anim-no-hide">
                @else
                    <div class="development__process-boxs-left _anim-item _anim-no-hide">
                @endif
                    <div class="process-box">
                        <div class="process-box__title">{{ $development['title_item'] }}</div>
                        <div class="process-box__count">{{ $index + 1 }}</div>
                        <div class="process-box__descr">{{  html_entity_decode(strip_tags($development['description'])) }}</div>
                        <div class="process-box__image"><img src="{{ $development->getImage() }}" alt=""></div>
                    </div>
                </div>
            @endforeach
        </div>
 </div>
</section>

<!-- DEVELOPMENT  END-->


@endsection