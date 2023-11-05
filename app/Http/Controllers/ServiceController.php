<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Slider;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::where('category_id',1)->where('active',1)->first();
        $services = Service::orderBy('order')->where('active',1)->get();
        app()->setLocale(session('locale'));
        $meta = Service::where('active',1)->pluck("title");

        return inertia('services',[
            'meta' => $meta,
            'slider' => $slider,
            'services' => $services,
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


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $slider = Slider::where('category_id',1)->where('active',1)->first();
        $service = Service::orderBy('order')->where('active',1)->find($id);
        $previous = Service::where('id', '<', $id)->max('id');
        $next = Service::where('id', '>', $id)->min('id');
        $related_services = Service::where('id', '!=', $service->id)->limit(4)->inRandomOrder()->where('active',1)->get();
        app()->setLocale(session('locale'));
        $meta = Service::where('active',1)->pluck("title");

        // return $meta;
        
        return inertia('service',[
            'meta' => $meta,
            'slider' => $slider,
            'service' => $service,
            'previous' => $previous,
            'next' => $next,
            'related_services' => $related_services,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
