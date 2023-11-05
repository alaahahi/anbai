<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Project;
use App\Models\Service;
use App\Models\Faq;
use App\Models\Client;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::where('category_id',1)->limit(6)->where('active',1)->get();
        $abouts = About::orderBy('order')->where('active',1)->limit(3)->get();


        $projects_count = Project::where('active',1)->get()->count();
        $services = Service::where('active',1)->get();
        $clients_count = Client::get()->count();
        $meta = About::where('active',1)->pluck('title');

        return inertia('about',[
            'meta' => $meta,
            'slider' => $slider,
            'abouts' => $abouts,
            'projects_count' => $projects_count,
            'services' => $services,
            'clients_count' => $clients_count,
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
        $abouts = About::orderBy('order')->where('active',1)->find($id);
        $meta = About::where('active',1)->pluck('title');

        return inertia('about',[
            'meta' => $meta,
            'abouts' => $abouts,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
