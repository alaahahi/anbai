<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamMemberType;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::where('category_id',1)->where('active',1)->first();
        $members = Team::orderBy('order')->with('type')->get();
        $types_members = TeamMemberType::with('members')->get();
        app()->setLocale(session('locale'));
        $meta = Team::pluck('title');

        return inertia('team',[
            'meta' => $meta,
            'slider' => $slider,
            'types_members' => $types_members,
            'members' => $members,
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
        $slider = Slider::where('category_id',1)->where('active',1)->first();
        $member = Team::with('socials')->orderBy('order')->find($id);
        app()->setLocale(session('locale'));
        $meta = Team::pluck('title');


        return inertia('team-member',[
            'meta' => $meta,
            'slider' => $slider,
            'member' => $member,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
