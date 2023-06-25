<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Development;

class DevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developments = count(Development::all()) === 0 ? [] : Development::all();
        return view('admin.developments.index', compact('developments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.developments.create');
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
          'title_item' => 'required',    
          'description' => 'required',       
          'thumbnail' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Development::uploadImage($request);

        $development = Development::create($data);
        // $Development->tags()->sync($request->tags);

        return redirect()->route('developments.index')->with('success', 'Разработка добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $development = Development::find($id);
        return view('admin.developments.edit', compact('development'));
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
            'title_item' => 'required',   
            'description' => 'required',         
            'thumbnail' => 'nullable|image',
          ]);

          $development = Development::find($id);
          $data = $request->all();
          if ($file = Development::uploadImage($request, $development->thumbnail)) {
            $data['thumbnail'] = $file;
          }

        $development->update($data);

          return redirect()->route('developments.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $developments = Development::find($id);
        // Storage::delete($Development->thumbnail);
        $developments->delete();

        return redirect()->route('developments.index')->with('success', 'Разработка удалена');
    }
}
