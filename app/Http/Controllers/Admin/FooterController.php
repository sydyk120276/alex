<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = count(Footer::all()) === 0 ? [] : Footer::all();
        return view('admin.footers.index', compact('footers'));
    }

    /**
     * Show the Footer for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footers.create');
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
          'phone' => 'required',    
          'email' => 'required',    
          'adress' => 'required',    
        ]);

        $data = $request->all();

        $data['thumbnail'] = Footer::uploadImage($request);

        $footer = Footer::create($data);
        // $Footer->tags()->sync($request->tags);

        return redirect()->route('footers.index')->with('success', 'Форма добавлена');
    }


    /**
     * Show the Footer for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = Footer::find($id);
        return view('admin.footers.edit', compact('footer'));
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
          'phone' => 'required',    
          'email' => 'required',    
          'adress' => 'required',    
          ]);

          $footer = Footer::find($id);
          $data = $request->all();
          if ($file = Footer::uploadImage($request, $footer->thumbnail)) {
            $data['thumbnail'] = $file;
          }

        $footer->update($data);

          return redirect()->route('footers.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footers = Footer::find($id);
        // Storage::delete($Footer->thumbnail);
        $footers->delete();

        return redirect()->route('footers.index')->with('success', 'Форма удалена');
    }
}
