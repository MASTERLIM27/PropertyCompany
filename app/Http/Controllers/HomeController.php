<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'title'=>'Property Company',
            'pageTitle'=>'Property Company',
            'developer'=>Developer::all(),
            'project'=>Project::all()
        ]);
    }
}