<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Head;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heads = count(Head::all()) === 0 ? [] : Head::all();
        return view('admin.heads.index', compact('heads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.heads.create');
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
          'descr' => 'required',       
          'keywords' => 'required',       
        ]);
        $data = $request->all();

        $head = Head::create($data);

        return redirect()->route('heads.index')->with('success', 'Данные о нас добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $head = Head::find($id);
        return view('admin.heads.edit', compact('head'));
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
            'descr' => 'required',    
            'keywords' => 'required',   
          ]);

          $head = Head::find($id);

          $data = $request->all();

         $head->update($data);

          return redirect()->route('heads.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $head = Head::find($id);
        // Storage::delete($head->thumbnail);
        $head->delete();
        // Head::destroy($id);

        return redirect()->route('heads.index')->with('success', 'Информация удалена');
    }
}
