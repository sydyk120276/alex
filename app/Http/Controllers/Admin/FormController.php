<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = count(Form::all()) === 0 ? [] : Form::all();
        return view('admin.forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.create');
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
          'description_button' => 'required',       
          'thumbnail' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Form::uploadImage($request);

        $Form = Form::create($data);
        // $Form->tags()->sync($request->tags);

        return redirect()->route('forms.index')->with('success', 'Форма добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::find($id);
        return view('admin.forms.edit', compact('form'));
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
            'description_button' => 'required',        
            'thumbnail' => 'nullable|image',
          ]);

          $form = Form::find($id);
          $data = $request->all();
          if ($file = Form::uploadImage($request, $form->thumbnail)) {
            $data['thumbnail'] = $file;
          }

        $form->update($data);

          return redirect()->route('forms.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forms = Form::find($id);
        // Storage::delete($Form->thumbnail);
        $forms->delete();

        return redirect()->route('forms.index')->with('success', 'Форма удалена');
    }
}
