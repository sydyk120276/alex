@extends('layouts.layout')

@section('title', 'Alex :: Home')


@section('main')

<div class="main">
    @if(isset($mains[0]))
    <img class="image image1" src="{{ $mains[0]->getImage() }}" alt="">
    @endif
    @if(isset($mains[0]))
    <img class="image image2" src="{{ $mains[0]->getThumbnail2() }}" alt="">
    @endif
    @if(isset($mains[0]))
    <img class="image image3" src="{{ $mains[0]->getThumbnail3() }}" alt="">
    @endif
<div class="container position-relative">
    <div class="main__title">
        @if(isset($mains[0]))
        <h1 class="main__title-item _anim-item _anim-no-hide">{{ $mains[0]->title_item }} </h1>
        @endif
        @if(isset($mains[0]))
        <p class="main__title-descr _anim-item _anim-no-hide">{!! $mains[0]->description !!}</p>
        @endif
        <div class="main__title-link _anim-item _anim-no-hide">
            @if(isset($mains[0]))
            <a href="#">{{ $mains[0]->description_button }}</a>
            @endif
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
                <b>{!! $about->description !!}</b> <br>                    
                <span>
                    {!! $about->content !!}
                </span>
                <a href="#">View More</a>          
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
             <div class="box__descr">{!! $projects[0]->description !!}</div>
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
             <div class="box__descr">{!! $projects[1]->description !!}</div>
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
             <div class="box__descr">{!! $projects[2]->description !!}</div>
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
             <div class="box__descr">{!! $projects[3]->description !!}</div>
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
             <div class="box__descr">{!! $projects[4]->description !!}</div>
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
             <div class="box__descr">{!! $projects[5]->description !!}</div>
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
   <a href="#" class="services__content-service-box service-box _anim-item _anim-no-hide">
     <div class="service-box-title">{{ $service->title_item }}</div>
     <div class="service-box-descr">{!! $service->description !!}</div>
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
    @if(isset($developments[0]))
        <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $developments[0]->title }}</h2>
        @endif
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
                        <div class="process-box__descr">{!! $development['description'] !!}</div>
                        <div class="process-box__image"><img src="{{ $development->getImage() }}" alt=""></div>
                    </div>
                </div>
            @endforeach
        </div>
 </div>
</section>

<!-- DEVELOPMENT  END-->

  <!-- PROGECT-FORM  START-->

  <section class="progect-form" id="progect-form">
    <div class="container">
        @if(isset($forms[0]))
      <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $forms[0]->title }}</h2>
      @endif
    <form method="post" class="progect-form__form _anim-item _anim-no-hide" id="ajax_form">
      <input type="hidden" name="_token" value="DgdSp09RxNoXJgHL8wmoBMFUp5PosX2I5XKpuBnp">               
       <div class="project-request-center">
          <div class="form-group">
              <div class="form-group__box">
                  <label>
                      <input name="name" type="text" class="form-group__box-form-control" placeholder="First name">
                  </label>
              </div>
              <div class="form-group__box">
                  <label>
                      <input name="lastname" type="text" class="form-group__box-form-control" placeholder="Last name">
                  </label>
              </div>
          </div>
          <div class="u-mt-30 form-group">
              <div class="form-group__box">
                  <label>
                      <input name="email" type="text" class="form-group__box-form-control" placeholder="Email">
                  </label>
              </div>
              <div class="form-group__box">
                  <label>
                      <input name="phone" type="text" class="form-group__box-form-control" placeholder="Phone">
                  </label>
              </div>
          </div>
          <div class="u-mt-30 form-group">
              <div class="form-group__box">
                  <label>
                      <select name="budget" data-placeholder="Budget" class="select2 default-select form-group__box-form-control select2-hidden-accessible" data-select2-id="select2-data-1-rj7e" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="select2-data-3-qsp6"></option>
                          <option class="select2-option" value="50000"> $0 - $50,000</option>
                          <option class="select2-option" value="100000">$50,000 - $100,000</option>
                          <option class="select2-option" value="150000">$100,000 - $150,000</option>
                          <option class="select2-option" value="150000+">$150,000+</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-3d4n" style="width: 400px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-budget-hd-container"><span class="select2-selection__rendered" id="select2-budget-hd-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Budget</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </label>
              </div>
              <div class="form-group__box">
                  <label>
                      <select name="wheredid" data-placeholder="Where did you hear about us?" class="select2 default-select form-group__box-form-control select2-hidden-accessible" data-select2-id="select2-data-4-kofe" tabindex="-1" aria-hidden="true">
                          <option data-select2-id="select2-data-6-3xht"></option>
                          <option class="select2-option" value="Google">Google</option>
                          <option class="select2-option" value="Reddit">Reddit</option>
                          <option class="select2-option" value="Recommended by someone else.">Recommended by someone else.</option>
                          <option class="select2-option" value="Axel owner or employee.">Axel owner or employee.</option>
                          <option class="select2-option" value="Other">Other</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-j43b" style="width: 400px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-wheredid-gq-container"><span class="select2-selection__rendered" id="select2-wheredid-gq-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Where did you hear about us?</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                  </label>
              </div>
          </div>

          <textarea name="message" id="message" cols="30" rows="10" class="form-group__box-form-control" placeholder="Message"></textarea>
          <div class="d-flex justify-content-center align-items-center">
              <button class="project-request-center__btn" id="formBtn">Submit</button>
              
          </div>
      </div>
      <img src="/assets/front/img/form-background-bottom.svg" class="project-request-bg" alt="">
  </form>
  <div class="progect-form__contact _anim-item _anim-no-hide">
    <div class="progect-form__contact-top">OR</div>
    <div class="progect-form__contact-content contact-content">
        <div class="contact-content__left">
            @if(isset($forms[0]))
            <h5 class="contact-content__left-title">{{ $forms[0]->title_item }}</h5>
            @endif
            @if(isset($forms[0]))
            <p class="contact-content__left-descr">{!! $forms[0]->description !!}</p>
            @endif
            @if(isset($forms[0]))
            <a href="https://calendly.com/axelhub/30min" target="_blank" class="contact-content__left-btn">{{ $forms[0]->description_button }}</a>
            @endif
        </div>
        <div class="contact-content__right">
            <img src="/assets/front/img/contact_calendar.png" alt="calendar">
        </div>
    </div>
</div>
</div>
  </section>

  <!-- PROGECT-FORM  END-->


@endsection