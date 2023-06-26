<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Projects;
use App\Models\Services;
use App\Models\About;
use App\Models\Footer;
use App\Models\Main;
use App\Models\Head;
use App\Models\Header;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $allnews = News::orderBy('id', 'desc')->paginate(2);
        $footers = Footer::all();
        $headers = Header::all();   
        $abouts = About::all();
        $services = Services::all();
        $heads = Head::all();
         // Получение изображений галереи из базы данных или другого источника данных
        
        return view('frontnews.index', compact('allnews', 'footers', 'headers', 'abouts', 'services', 'heads'));
    }

    public function show($slug)
    { 
        $news = News::where('id', $slug)->firstOrFail();
        $footers = Footer::all();
        $headers = Header::all();   
        $abouts = About::all();
        $services = Services::all();

        return view('frontnews.show', compact('news', 'footers', 'headers', 'abouts', 'services'));
    }
}

