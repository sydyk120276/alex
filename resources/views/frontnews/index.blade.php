@extends('layouts.layout')

@if(isset($heads[0]))
@section('title',  $heads[0]->title )
@endif
@php
    $description = isset($heads[0]) ? $heads[0]->descr : "Данные не пришли";
    $keywords = isset($heads[0]) ? $heads[0]->keywords : "Данные не пришли";
@endphp

@section('description', $description)
@section('keywords', $keywords)


@section('content')

  <!-- NEWS  START-->

  <section class="news" id="news">
    <div class="container">
        <div class="news__content">
        @foreach ($allnews as $news)
        <div class="news__content-box col-lg-8">
            <a href="{{ route('frontnews.single', ['slug' => $news->id]) }}" class="row justify-content-center">
                <div class="col-lg-12 pt-4">
                    <div class="news__content-box-img">
                        <img class="" src="{{ $news->getImage() }}" alt="">
                    </div>
                </div>
                 <h2 class="col-lg-12 text-center">{{ $news['title'] }}</h2> 
                 <b class="col-lg-12 text-center mb-4">{!! $news->description !!}</b> 
              </a>
        </div>
        @endforeach
        <div class="">
            <div class=" clearfix">
                {{ $allnews->links('vendor.pagination.bootstrap-4') }}
                </div>
                </div>
    </div> 
    </div> 
 </section>

<!-- NEWS  END-->


@endsection