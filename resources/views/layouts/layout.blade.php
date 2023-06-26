<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <link rel="stylesheet" href="{{ asset('assets/front/css/front.css')}}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
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
            @if(isset($headers[0]))
            <a class="nav-link active" href="#">{{  $headers[0]->link1 }}</a>
            @endif
            @if(isset($headers[0]))
            <a class="nav-link" href="#">{{  $headers[0]->link2 }}</a>
            @endif
            @if(isset($headers[0]))
            <a class="nav-link" href="{{ route('news.index') }}">{{  $headers[0]->link3 }}</a>
            @endif
            @if(isset($headers[0]))
            <a class="nav-link" href="#">{{  $headers[0]->link4 }}</a>
            @endif
            <button class="nav-link-button">
                @if(isset($headers[0]))
                <a class="nav-link" href="#">{{  $headers[0]->link5 }}</a>   
                @endif
            </button>      
        </div>
        <div class=" d-flex justify-content-center">
            <a class="burger-logo" href="#">
                @if(isset($headers[0]))
                <img width="20" height="20" class="burger-logo-img" src="{{ $headers[0]->getLogo() }}" alt="">
                @endif
                @if(isset($headers[0]))
                <div class="burger-logo-text">{{  $headers[0]->title_logo }}</div>
                @endif
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
                    <a class="burger-logo" href="{{ route('homs') }}">
                        @if(isset($headers[0]))
                        <img width="20" height="20" class="burger-logo-img" src="{{ $headers[0]->getLogo() }}" alt="">
                        @endif
                        @if(isset($headers[0]))
                        <div class="burger-logo-text">{{  $headers[0]->title_logo }}</div>
                        @endif
                    </a>
                </div>
                <ul class="nav col-lg-10 justify-content-end align-items-center gap-3">
                  <li class="nav-item dropdown">
                    @if(isset($headers[0]))
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{  $headers[0]->link1 }}</a>
                      @endif
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  <li class="nav-item dropdown">
                    @if(isset($headers[0]))
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{  $headers[0]->link2 }}</a>
                      @endif
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                  <li class="nav-item">
                    @if(isset($headers[0]))
                    <a class="nav-link" href="#">{{  $headers[0]->link3 }}</a>
                    @endif
                  </li>
                  <li class="nav-item">
                    @if(isset($headers[0]))
                    <a class="nav-link" href="{{ route('frontnews') }}">{{  $headers[0]->link4 }}</a>
                    @endif
                  </li>
                  <li class="nav-item">
                    @if(isset($headers[0]))
                    <a class="nav-link" href="#">{{  $headers[0]->link5 }}</a>
                    @endif
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



  <!-- FOOTER  START-->

  <section class="footer">
    <div class="container">
      <div class="footer__top">
        <div class="footer__top-info _anim-item _anim-no-hide">
            <div class="footer__top-info-box">
                <div class="footer__top-info-box-img">
                    <img src="/assets/front/img/phone.svg" alt="">
                </div>
                @if(isset($footers[0]))
                <a href="https://axelhub.com/contact" class="footer__top-info-box-text">{{ $footers[0]->phone }}</a>
                @endif
            </div>
            <div class="footer__top-info-box">
                <div class="footer__top-info-box-img">
                    <img src="/assets/front/img/sms.svg" alt="">
                </div>
                @if(isset($footers[0]))
                <a href="https://axelhub.com/contact" class="footer__top-info-box-text">{{ $footers[0]->email }}</a>
                @endif
            </div>
            <div class="footer__top-info-box">
                <div class="footer__top-info-box-img">
                    <img src="/assets/front/img/gps.svg" alt="">
                </div>
                @if(isset($footers[0]))
                <a href="https://axelhub.com/contact" class="footer__top-info-box-text">{{ $footers[0]->adress }}</a>
                @endif
            </div>
        </div>

        <div class="footer__top-nav _anim-item _anim-no-hide">
            <div class="footer__top-nav-box">
                @if(isset($services[0]))
                <a href="#" class="body-title u-text-light footer__top-nav-box-title">
                    {{ $services[0]->title }}
                </a>
                @endif
                @if(isset($services[2]))
                <a href="#" class="footer__top-nav-box-link">
                 {{ $services[2]->title_item }}
                </a>
                @endif
                @if(isset($services[0]))
                <a href="#" class="footer__top-nav-box-link">  {{ $services[0]->title_item }}</a>
                @endif
                @if(isset($services[1]))
                <a href="#" class="footer__top-nav-box-link">  {{ $services[1]->title_item }}</a>
                @endif
            </div>
            <div class="footer__top-nav-box">
                @if(isset($headers[0]))
                <div class="body-title u-text-light footer__top-nav-box-title">{{  $headers[0]->link1 }}</div>
                @endif
                @if(isset($abouts[0]))
                <a href="h#" class="footer__top-nav-box-link"> {{ $abouts[0]->title }}</a>
                @endif
                @if(isset($headers[0]))
                <a href="#" class="footer__top-nav-box-link">{{  $headers[0]->link2 }}</a>
                @endif
                @if(isset($headers[0]))
                <a href="#" class="footer__top-nav-box-link">{{  $headers[0]->link3 }}</a>
                @endif
            </div>
        </div>
    </div>
    <div class="footer__bottom">
      <div class="footer__bottom-text">2023 AxelHub, All rights reserved</div>
      <div class="footer__bottom-links">
          <div class="social-media">
              <a href="#" target="_blank" class="social-media__link">
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