<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = count(Projects::all()) === 0 ? [] : Projects::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = [];
        return view('admin.projects.create', compact('platforms'));
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
          'logo' => 'required',     
          'thumbnail' => 'nullable|image',
        ]);

        $data = $request->all();

        $data['thumbnail'] = Projects::uploadImage($request);
        $data['logo'] = Projects::uploadLogo($request);
        $data['platform1'] = Projects::uploadPlatform1($request);
        $data['platform2'] = Projects::uploadPlatform2($request);

        $projects = Projects::create($data);

        return redirect()->route('projects.index')->with('success', 'Проект добавлен');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Projects::find($id);
        return view('admin.projects.edit', compact('project'));
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
            // 'logo' => 'required',       
            'thumbnail' => 'nullable|image',
          ]);

          $project = Projects::find($id);
          $data = $request->all();
          if ($file = Projects::uploadImage($request, $project->thumbnail)) {
            $data['thumbnail'] = $file;
          }
          if ($file = Projects::uploadLogo($request, $project->logo)) {
            $data['logo'] = $file;
          }
          if ($file = Projects::uploadPlatform1($request, $project->platform1)) {
            $data['platform1'] = $file;
          }
          if ($file = Projects::uploadPlatform2($request, $project->platform2)) {
            $data['platform2'] = $file;
          }

        $project->update($data);

          return redirect()->route('projects.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects = Projects::find($id);
        // Storage::delete($Projects->thumbnail);
        $projects->delete();

        return redirect()->route('projects.index')->with('success', 'Проект удален');
    }

}
