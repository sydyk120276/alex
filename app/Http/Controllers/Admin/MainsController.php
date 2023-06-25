<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main;

class MainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mains = count(Main::all()) === 0 ? [] : Main::all();
        return view('admin.mains.index', compact('mains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = [];
        return view('admin.mains.create', compact('platforms'));
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
          'title_item' => 'required',    
          'description' => 'required',    
          'description_button' => 'required',    
          'thumbnail' => 'nullable|image',
          'thumbnail2' => 'nullable|image',
          'thumbnail3' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Main::uploadImage($request);
        $data['thumbnail2'] = Main::uploadThumbnail2($request);
        $data['thumbnail3'] = Main::uploadThumbnail3($request);

        $main = Main::create($data);

        return redirect()->route('mains.index')->with('success', 'Данные добавлены');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Main::find($id);
        return view('admin.mains.edit', compact('main'));
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
          'title_item' => 'required',    
          'description' => 'required',    
          'description_button' => 'required',    
          'thumbnail' => 'nullable|image',
          'thumbnail2' => 'nullable|image',
          'thumbnail3' => 'nullable|image',
          ]);

          $main = Main::find($id);
          $data = $request->all();
          if ($file = Main::uploadImage($request, $main->thumbnail)) {
            $data['thumbnail'] = $file;
          }
          if ($file = Main::uploadThumbnail2($request, $main->platform1)) {
            $data['platform1'] = $file;
          }
          if ($file = Main::uploadThumbnail3($request, $main->platform2)) {
            $data['platform2'] = $file;
          }

        $main->update($data);

          return redirect()->route('mains.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mains = Main::find($id);
        // Storage::delete($mains->thumbnail);
        $mains->delete();

        return redirect()->route('mains.index')->with('success', 'Проект удален');
    }

}
