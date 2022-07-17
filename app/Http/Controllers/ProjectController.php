<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }
    public function show(Project $project)
    {
        return view('projects.show',
            [
                'project' => $project
            ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {

        $fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',

        ]);

        Project::create($fields);

        return redirect()->route('projects.index');

    }


}