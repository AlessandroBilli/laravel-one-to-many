<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect('/projects');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return redirect('/projects');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect('/projects');
    }
}
