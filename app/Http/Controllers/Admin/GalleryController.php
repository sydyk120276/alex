<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = count(Gallery::all()) === 0 ? [] : Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.galleries.create');
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
            'thumbnail' => 'nullable|image',
          ]);
          $description = strip_tags($request->input('description'));
          $title = strip_tags($request->input('title'));
          $yourModel = new Gallery;
          $yourModel->title = $title;
          $yourModel->description = $description;
          $yourModel['thumbnail'] = Gallery::uploadImage($request);
          $yourModel->save();
  
          return redirect()->route('galleries.index')->with('success', 'Картинка добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        // $Gallery = Gallery::pluck('title', 'id')->all();
        return view('admin.galleries.edit', compact('gallery'));
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
            'thumbnail' => 'nullable|image',
          ]);

          $gallery = Gallery::find($id);
          $data = $request->all();
          if ($file = Gallery::uploadImage($request, $gallery->thumbnail)) {
            $data['thumbnail'] = $file;
          }

        $gallery->update($data);

          return redirect()->route('galleries.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        // Storage::delete($Gallery->thumbnail);
        $gallery->delete();
        // Gallery::destroy($id);

        return redirect()->route('galleries.index')->with('success', 'Информация удалена');
    }
}