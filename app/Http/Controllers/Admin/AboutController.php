<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.abouts.create');
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
          'content' => 'required',     
          // 'thumbnail' => 'nullable|image',
        ]);
        $content = strip_tags($request->input('content'));
        $description = strip_tags($request->input('description'));
        $title = strip_tags($request->input('title'));
        $yourModel = new About;
        $yourModel->content = $content;
        $yourModel->title = $title;
        $yourModel->description = $description;
        $yourModel['thumbnail'] = About::uploadImage($request);
        $yourModel->save();

        return redirect()->route('abouts.index')->with('success', 'Данные о нас добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        // $about = About::pluck('title', 'id')->all();
        return view('admin.abouts.edit', compact('about'));
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
            'content' => 'required',     
            // 'thumbnail' => 'nullable|image',
          ]);

          $about = About::find($id);
          $data = $request->all();
          if ($file = About::uploadImage($request, $about->thumbnail)) {
            $data['thumbnail'] = $file;
          }

        $about->update($data);

          return redirect()->route('abouts.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about = About::find($id);
        // Storage::delete($about->thumbnail);
        $about->delete();
        // About::destroy($id);

        return redirect()->route('abouts.index')->with('success', 'Информация удалена');
    }
}
