<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Developer;
use Illuminate\Support\Str;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('developer',[
            'title'=>'Developer',
            'pageTitle'=>'Developer',
            'developers'=>Developer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDeveloper', [
            'title'=>'createDeveloper',
            'pageTitle'=>'Create Developer']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Developer::create([
            'code' =>$request->dCode,
            'name' =>$request->dName,
            'videolink' =>$request->dVideolink,
            'description' =>$request->dDescription
        ]);
        return redirect(route('developers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('showDeveloper', [
            'title'=>'showDeveloper',
            'pageTitle'=>'Developer',
            'developers'=> Developer::where('code', $code)
                ->first(),
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
        $developer = Developer::where('code', $id)
            ->first();
        return view('editDeveloper', compact('developer'), [
            'title'=>'editDeveloper',
            'pageTitle'=>'Edit Developer']);
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
        $developer = Developer::findOrFail($id);
        $developer->update([
            'code' =>$request->dCode,
            'name' =>$request->dName,
            'videolink' =>$request->dVideolink,
            'description' =>$request->dDescription
        ]);
        return redirect(route('developers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Developer = Developer::where('code', $id)
        ->first();
        $Developer->delete();
        return redirect(route ('developers.index'));
    }
}
