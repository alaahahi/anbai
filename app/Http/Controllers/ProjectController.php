<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::where('category_id',1)->limit(6)->where('active',1)->get();
        $projects = Project::where('active',1)->with(['images', 'type'])->orderBy('order')->get();
        $types_project = ProjectType::with('projects')->get();
        app()->setLocale(session('locale'));
        $meta = Project::where('active',1)->pluck('name');

        return inertia('projects',[
            'meta' => $meta,
            'slider' => $slider,
            'types_project' => $types_project,
            'projects' => $projects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slider = Slider::where('category_id',1)->limit(6)->where('active',1)->get();
        $project = Project::with('images')->where('active',1)->find($id);
        app()->setLocale(session('locale'));
        $meta = Project::where('active',1)->pluck('name');
        $related_projects = Project::where('active',1)->
            where('project_type_id', $project->project_type_id)->
            where('active',1)->
            whereNot('id',$project->id)->
        with(['images', 'type'])->orderBy('order')->get();

        // dd($related_projects);
        $previous = Project::where('id', '<', $id)->max('id');
        $next = Project::where('id', '>', $id)->min('id');


        return inertia('project-details',[
            'meta' => $meta,
            'slider' => $slider,
            'project' => $project,
            'related_projects' => $related_projects,
            'previous' => $previous,
            'next' => $next,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
