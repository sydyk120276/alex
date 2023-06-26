@extends('layouts.layout')

@if(isset($news))
@section('title',  $news->head_title )
@endif
@php
    $description = isset($news) ? $news->head_description : "Данные не пришли";
    $keywords = isset($news) ? $news->head_keywords : "Данные не пришли";
@endphp

@section('description', $description)
@section('keywords', $keywords)



@section('content')

  <!-- NEWS  START-->

  <section class="news-page" id="news-page">
    <div class="container">
        <div class="news-page__content">
        <div class="news__content-box col-lg-12">
            <ul>
                <a class="news__content-box-link" href="{{ route('homs') }}">Главная</a> <span>/</span>
                <a class="news__content-box-link" href="{{ route('frontnews') }}">Новости</a> <span>/</span>
                <span>{{ $news->title }}</span>
            </ul>
            <div class="row justify-content-center">
                <h2 class="col-lg-12 text-center news__content-box-title">{{ $news['title'] }}</h2> 
                <div class="col-lg-12">
                    <div class="news__content-box-img">
                        <img class="" src="{{ $news->getImage() }}" alt="">
                    </div>
                </div>
                 <b class="col-lg-12 text-center mb-4 news__content-box-descr">{!! $news->description !!}</b> 
              </div>
        </div>
    </div> 
    </div> 
 </section>

<!-- NEWS  END-->


@endsection