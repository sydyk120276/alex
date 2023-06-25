<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Projects;
use App\Models\Services;
use App\Models\Development;
use App\Models\Form;
use App\Models\Footer;
use App\Models\Main;
use App\Models\Header;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $galleries = Gallery::all();
        $projects = Projects::all();
        $services = Services::all();
        $developments = Development::all();
        $forms = Form::all();
        $footers = Footer::all();
        $mains = Main::all();
        $headers = Header::all();   
         // Получение изображений галереи из базы данных или другого источника данных
        
        return view('mains.index', compact('abouts', 'galleries', 'projects', 'services', 'developments', 'forms', 'footers', 'mains', 'headers'));
    }

    public function show($slug)
    {
        return view('mains.show');
    }
}