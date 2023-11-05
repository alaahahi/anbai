<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        app()->setLocale(session('locale'));

        $careerss = Career::orderByDesc('created_at')->get();
        $meta = Career::orderByDesc('created_at')->limit(12)->pluck('title');
        
        return inertia('careerss',[
            'meta' => $meta,
            'careerss' => $careerss,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function applicant($id)
    {
        app()->setLocale(session('locale'));
        $careerss = Career::orderByDesc('created_at')->get();
        $career = Career::find($id);
        $meta = Career::orderByDesc('created_at')->limit(12)->pluck('title');
        
        return inertia('applicant',[
            'meta' => $meta,
            'career' => $career,
            'careerss' => $careerss,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:255',
            'description' => 'required|string|max:255',
            // 'file' => 'nullable|max:2048',
        ]);
        
        if ($request->file) {
            $file = $request->file;
            $fileName = str_replace(' ', '_', $request->name . '-' . time() . '.' . $file->extension());
            $file->storeAs('applicant', $fileName, 'public');
        }

        $data = new Applicant();
        $data-> category_id = $request->category;
        $data-> name = $request->name;
        $data-> email = $request->email;
        $data-> phone = $request->phone;
        $data-> description = $request->description;
        if ($request->file) { $data-> file = $fileName; }
        $data->save();

        if (!empty($data)) {
            return back()->with('message', 'Your employment application has been submitted successfully');
        } else {
            return back()->with('message', 'Please try again later.');
        }

                
    }

    /**
     * Display the specified resource.
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        //
    }
}
