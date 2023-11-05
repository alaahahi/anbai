<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Inertia\Inertia;


class PagesController extends Controller
{
    public function __invoke(Request $request)
    {
        $results = null;
       // $client = new Client( $this->url, 'masterKey');
       // $results = $client->stats();
        //dd($results);
        return Inertia::render('home');   

    }
    public function home()
    {
        return Inertia::render('home');   
    }
    public function about(Request $request)
    {
        return Inertia::render('About');   
    }
    public function team(Request $request)
    {
        return Inertia::render('Team');   
    }
    public function services(Request $request)
    {
        return Inertia::render('Services');   
    }
    public function services_details(Request $request)
    {
        return Inertia::render('ServicesDetails');   
    }
    public function projects(Request $request)
    {
        return Inertia::render('Projects');   
    }
    public function project_details(Request $request)
    {
        return Inertia::render('ProjectDetails');   
    }
    public function careers(Request $request)
    {
        return Inertia::render('Careers');   
    }
    public function careers_details(Request $request)
    {
        return Inertia::render('CareersDetails');   
    }
    public function blog(Request $request)
    {
        return Inertia::render('Blog');   
    }
    public function blog_details(Request $request)
    {
        return Inertia::render('BlogDetails');   
    }
    public function contact(Request $request)
    {
        return Inertia::render('Contact');   
    }
}