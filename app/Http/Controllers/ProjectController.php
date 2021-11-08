<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Developer;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('project',[
            'title'=>'Project',
            'pageTitle'=>'Project',
            'projects'=>Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Developer::all();

        return view('createProject', [
            'title'=>'createProject',
            'pageTitle'=>'Create Project'], compact('developers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create([
            'code' => $request->pCode,
            'name' =>$request->pName,
            'type' =>$request->pType,
            'developer' =>$request->pDeveloper,
            'videolink' =>$request->pVideolink,
            'description' =>$request->pDescription
        ]);
        return redirect(route('projects.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('showproject', [
            'title'=>'showProject',
            'pageTitle'=>'Project',
            'project'=> Project::where('code', $code)
                ->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $developers = Developer::all();
        $project = Project::where('code', $id)
            ->first();
        return view('editProject', compact('project', 'developers'), [
            'title'=>'editProject',
            'pageTitle'=>'Edit Project']);
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
        $project = Project::findOrFail($id);
        $project->update([
            'code' => $request->pCode,
            'name' =>$request->pName,
            'type' =>$request->pType,
            'developer' =>$request->pDeveloper,
            'videolink' =>$request->pVideolink,
            'description' =>$request->pDescription
        ]);
        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Project = Project::where('code', $id)
        ->first();
        $Project->delete();
        return redirect(route ('projects.index'));
    }
}
