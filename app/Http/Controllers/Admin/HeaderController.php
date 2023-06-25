<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = count(Header::all()) === 0 ? [] : Header::all();
        return view('admin.headers.index', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = [];
        return view('admin.headers.create', compact('platforms'));
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
          'title_logo' => 'required',    
          'link1' => 'required',    
          'link2' => 'required',    
          'link3' => 'required',    
          'link4' => 'required',    
          'link5' => 'required',      
          'logo' => 'nullable|image',
          'mode_button_image' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['logo'] = Header::uploadLogo($request);
        $data['mode_button_image'] = Header::uploadModeButton($request);

        $header = Header::create($data);

        return redirect()->route('headers.index')->with('success', 'Данные добавлены');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = Header::find($id);
        return view('admin.headers.edit', compact('header'));
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
          'title_logo' => 'required',    
          'link1' => 'required',    
          'link2' => 'required',    
          'link3' => 'required',    
          'link4' => 'required',    
          'link5' => 'required',      
          'logo' => 'nullable|image',
          'mode_button_image' => 'nullable|image',
          ]);

          $header = Header::find($id);
          $data = $request->all();
          if ($file = Header::uploadLogo($request, $header->logo)) {
            $data['logo'] = $file;
          }
          if ($file = Header::uploadModeButton($request, $header->mode_button_image)) {
            $data['mode_button_image'] = $file;
          }

        $header->update($data);

          return redirect()->route('headers.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $headers = Header::find($id);
        // Storage::delete($headers->thumbnail);
        $headers->delete();

        return redirect()->route('headers.index')->with('success', 'Проект удален');
    }

}
