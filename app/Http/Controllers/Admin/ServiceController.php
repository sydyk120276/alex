<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = count(Services::all()) === 0 ? [] : Services::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = [];
        return view('admin.services.create', compact('platforms'));
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

        $data['thumbnail'] = Services::uploadImage($request);
        $data['platform1'] = Services::uploadPlatform1($request);
        $data['platform2'] = Services::uploadPlatform2($request);
        $data['platform3'] = Services::uploadPlatform3($request);
        $data['platform4'] = Services::uploadPlatform4($request);
        $data['platform5'] = Services::uploadPlatform5($request);
        $data['platform6'] = Services::uploadPlatform6($request);

        $services = Services::create($data);
        // $Services->tags()->sync($request->tags);

        return redirect()->route('services.index')->with('success', 'Сервис добавлен');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::find($id);
        return view('admin.services.edit', compact('service'));
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
            'title_item' => 'required',       
            'thumbnail' => 'nullable|image',
          ]);

          $service = Services::find($id);
          $data = $request->all();
          if ($file = Services::uploadImage($request, $service->thumbnail)) {
            $data['thumbnail'] = $file;
          }
          if ($file = Services::uploadPlatform1($request, $service->platform1)) {
            $data['platform1'] = $file;
          }
          if ($file = Services::uploadPlatform2($request, $service->platform2)) {
            $data['platform2'] = $file;
          }
          if ($file = Services::uploadPlatform3($request, $service->platform3)) {
            $data['platform3'] = $file;
          }
          if ($file = Services::uploadPlatform4($request, $service->platform4)) {
            $data['platform4'] = $file;
          }
          if ($file = Services::uploadPlatform5($request, $service->platform5)) {
            $data['platform5'] = $file;
          }
          if ($file = Services::uploadPlatform6($request, $service->platform6)) {
            $data['platform6'] = $file;
          }

        $service->update($data);

          return redirect()->route('services.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::find($id);
        // Storage::delete($services->thumbnail);
        $services->delete();

        return redirect()->route('services.index')->with('success', 'Сервис удален');
    }
}
