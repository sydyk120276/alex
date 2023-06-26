<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allnews = count(News::all()) === 0 ? [] : News::all();
        return view('admin.news.index', compact('allnews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'title' => 'required',      
          'description' => 'required',   
          'head_title' => 'required',         
          'head_description' => 'required',         
          'head_keywords' => 'required',      
          'image' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['image'] = News::uploadImage($request);

        $news = News::create($data);

        return redirect()->route('news.index')->with('success', 'Разработка добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',   
            'description' => 'required',         
            'head_title' => 'required',         
            'head_description' => 'required',         
            'head_keywords' => 'required',         
            'image' => 'nullable|image',
          ]);

          $news = News::find($id);
          $data = $request->all();
          if ($file = News::uploadImage($request, $news->image)) {
            $data['image'] = $file;
          }

        $news->update($data);

          return redirect()->route('news.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        // Storage::delete($News->image);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Разработка удалена');
    }
}
