<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    
  <!-- HEADER  START-->

  <header>
    <div class="mobile-header">
        <div class=" d-flex">
            <button type="button" class="theme-toggle-mobile">
                <img class="sun-image" src="/assets/front/img/Sun.png" alt="">
                <img class="moon-image" src="/assets/front/img/moon.png" alt="">    
              </button>
                {{-- <button >
                    <img height="15" width="15" src="{{ $headers[0]->getModeButton() }}" alt="">
                </button> --}}
          </div>
          <div class="burger-menu position-absolute">
            <a class="nav-link active" href="#">{{  $headers[0]->link1 }}</a>
            <a class="nav-link" href="#">{{  $headers[0]->link2 }}</a>
            <a class="nav-link" href="#">{{  $headers[0]->link3 }}</a>
            <a class="nav-link" href="#">{{  $headers[0]->link4 }}</a>
            <button class="nav-link-button">
                <a class="nav-link" href="#">{{  $headers[0]->link5 }}</a>   
            </button>      
        </div>
        <div class=" d-flex justify-content-center">
            <a class="burger-logo" href="https://axelhub.com">
                <img width="20" height="20" class="burger-logo-img" src="{{ $headers[0]->getLogo() }}" alt="">
                <div class="burger-logo-text">{{  $headers[0]->title_logo }}</div>
            </a>
        </div>
        <div class="burger-block justify-content-end">
            <div class="d-flex  burger">
                <span class="burger-span">
                </span>
              </div>
        </div>
    </div>       
</div>
    <div class="header-menu">
    <div class="container header-container">
        
            <div class="row justify-content-between">
                <div class="col-lg-2 d-flex align-items-center">
                    <a class="burger-logo" href="https://axelhub.com">
                        <img width="20" height="20" class="burger-logo-img" src="{{ $headers[0]->getLogo() }}" alt="">
                        <div class="burger-logo-text">{{  $headers[0]->title_logo }}</div>
                    </a>
                </div>
                <ul class="nav col-lg-10 justify-content-end align-items-center gap-3">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{  $headers[0]->link1 }}</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{  $headers[0]->link2 }}</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">{{  $headers[0]->link3 }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">{{  $headers[0]->link4 }}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">{{  $headers[0]->link5 }}</a>
                  </li>
                  <button type="button" class="theme-toggle">
                    <img class="sun-image" src="/assets/front/img/Sun.png" alt="">
                    <img class="moon-image" src="/assets/front/img/moon.png" alt="">    
                  </button>
                      {{-- <img height="15" width="15" src="{{ $headers[0]->getModeButton() }}" alt=""> --}}
                </ul>
              </div>
        </div>
  
  
    </header>

  <!-- HEADER  END-->

  <!-- MAIN  START-->

  @yield('main')

  <!-- MAIN  END-->


  <!-- SIDEBAR  START-->

  @if (Request::is('/'))
    @include('layouts.sidebar')
  @endif
  <!-- SIDEBAR  END-->


 @yield('content')


  <!-- PROGECT-FORM  START-->

  <section class="progect-form" id="progect-form">
    <div class="container">
      <h2 class="text-center item-inimate-0 _anim-item _anim-no-hide">{{ $forms[0]->title }}</h2>
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
            <h5 class="contact-content__left-title">{{ $forms[0]->title_item }}</h5>
            <p class="contact-content__left-descr">{{  html_entity_decode(strip_tags($forms[0]->description)) }}</p>
            <a href="https://calendly.com/axelhub/30min" target="_blank" class="contact-content__left-btn">{{ $forms[0]->description_button }}</a>
        </div>
        <div class="contact-content__right">
            <img src="/assets/front/img/contact_calendar.png" alt="calendar">
        </div>
    </div>
</div>
</div>
  </section>

  <!-- PROGECT-FORM  END-->


  <!-- FOOTER  START-->

  <section class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer__top-info _anim-item _anim-no-hide">
            <div class="footer__top-info-box">
                <div class="footer__top-info-box-img">
                    <img src="/assets/front/img/phone.svg" alt="">
                </div>
                <a href="https://axelhub.com/contact" class="footer__top-info-box-text">{{ $footers[0]->phone }}</a>
            </div>
            <div class="footer__top-info-box">
                <div class="footer__top-info-box-img">
                    <img src="/assets/front/img/sms.svg" alt="">
                </div>
                <a href="https://axelhub.com/contact" class="footer__top-info-box-text">{{ $footers[0]->email }}</a>
            </div>
            <div class="footer__top-info-box">
                <div class="footer__top-info-box-img">
                    <img src="/assets/front/img/gps.svg" alt="">
                </div>
                <a href="https://axelhub.com/contact" class="footer__top-info-box-text">{{ $footers[0]->adress }}</a>
            </div>
        </div>

        <div class="footer__top-nav _anim-item _anim-no-hide">
            <div class="footer__top-nav-box">
                @if(count($services) > 0)
                <a href="https://axelhub.com/services" class="body-title u-text-light footer__top-nav-box-title">
                    {{ $services[0]->title }}
                </a>
                @endif
                @if(isset($services[2]))
                <a href="https://axelhub.com/services/ui" class="footer__top-nav-box-link">
                 {{ $services[2]->title_item }}
                </a>
                @endif
                @if(count($services) > 0)
                <a href="https://axelhub.com/services/mobile" class="footer__top-nav-box-link">  {{ $services[0]->title_item }}</a>
                @endif
                @if(isset($services[1]))
                <a href="https://axelhub.com/services/web" class="footer__top-nav-box-link">  {{ $services[1]->title_item }}</a>
                @endif
            </div>
            <div class="footer__top-nav-box">
                @if(count($headers) > 0)
                <div class="body-title u-text-light footer__top-nav-box-title">{{  $headers[0]->link1 }}</div>
                @endif
                @if(count($abouts) > 0)
                <a href="https://axelhub.com/aboutus" class="footer__top-nav-box-link"> {{ $abouts[0]->title }}</a>
                @endif
                @if(count($headers) > 0)
                <a href="https://axelhub.com/career" class="footer__top-nav-box-link">{{  $headers[0]->link2 }}</a>
                @endif
                @if(count($headers) > 0)
                <a href="https://axelhub.com/faq" class="footer__top-nav-box-link">{{  $headers[0]->link3 }}</a>
                @endif
            </div>
        </div>
    </div>
    <div class="footer__bottom">
      <div class="footer__bottom-text">2023 AxelHub, All rights reserved</div>
      <div class="footer__bottom-links">
          <div class="social-media">
              <a href="https://www.linkedin.com/company/axelhub" target="_blank" class="social-media__link">
              <img src="/assets/front/img/linked-blue-logo.svg" alt="">
          </a>
        </div>
      </div>
  </div>
    </div>
  </section>

  <!-- FOOTER  END-->




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('assets/front/js/front.js') }}" ></script>
</html>