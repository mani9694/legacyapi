<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\project;

class ProjectsController extends Controller
{
     public function index(){
       $projects = project::all();

      return view ('projects.index', compact('projects'));

    //  return view ('projects.index');
    }
}
