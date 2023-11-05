<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Message;
use App\Models\Social;
use App\Models\PrivacyPolicy;
use App\Models\Terms;
use App\Models\About;
use App\Models\Service;
use App\Models\Team;
use App\Models\Project;
use App\Models\Faq;
use App\Models\Slider;
use App\Models\Client;
use App\Models\Mail;
use App\Models\TeamMemberType;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();
        $meta = Contact::pluck('title');

        return inertia('contact-us',[
            'meta' => $meta,
            'contact' => $contact,
        ]);
    }

    public function home()
    {
        $slider = Slider::where('category_id',1)->where('active',1)->limit(6)->get();
        $contact_us = Contact::orderBy('order_timeline')->get();
        $abouts = About::orderBy('order')->where('active',1)->limit(3)->get();
        $services = Service::orderBy('order')->where('active',1)->get();
        $clients = Client::orderBy('order')->get();
        $members = Team::with('socials')->orderBy('order')->get();
        $types_members = TeamMemberType::with('members.socials')->get();
        $projects = Project::where('active',1)->with(['images', 'type'])->orderBy('order')->get();
        $types_project = ProjectType::with('projects')->get();
        $questions = Faq::orderBy('order')->limit(5)->get();

        $projects_count = Project::where('active',1)->get()->count();
        $clients_count = Client::get()->count();

        $meta = Contact::pluck('title')
        . ' ' . About::pluck('title')
        . ' ' . Service::pluck('title')
        . ' ' . Project::pluck('name')
        . ' ' . Team::pluck('title');

        return inertia('home',[
            'meta' => $meta,
            'slider' => $slider,
            'contact_us' => $contact_us,
            'abouts' => $abouts,
            'services' => $services,
            'clients' => $clients,
            'types_members' => $types_members,
            'members' => $members,
            'projects' => $projects,
            'types_project' => $types_project,
            'questions' => $questions,
            'projects_count' => $projects_count,
            'clients_count' => $clients_count,
        ]);
    }



    public function policy()
    {
        $privacy_policy = PrivacyPolicy::first();
        $meta = PrivacyPolicy::pluck('title');

        return inertia('privacy-policy',[
            'meta' => $meta,
            'privacy_policy' => $privacy_policy,
        ]);
    }

    public function terms()
    {

        $terms = Terms::first();
        $meta = Terms::pluck('title');

        return inertia('terms',[
            'meta' => $meta,
            'terms' => $terms,
        ]);
    }

    public function message(Request $request)
    {
        $request->validate([
            'from' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:255',
            'message' => 'required|string|max:255',
        ]);

        $data = new Message();
        $data-> from = $request->from;
        $data-> email = $request->email;
        $data-> phone = $request->phone;
        $data-> message = $request->message;
        $data->save();

        if (!empty($data)) {
            return back()->with('message', 'The message was sent successfully');
        } else {
            return back()->with('message', 'Please try again later.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function maillist(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $Mail_old = Mail::where('mail', $request->email)->first();

        if ($Mail_old) {

        }else{
            $data = new Mail();
            $data-> mail = $request->email;
            $data->save();
        }

        // if ($Mail_old) {
        //     throw new Exception('This email is already in use.');
        // } else {
        //     $data = new Mail();
        //     $data->mail = $request->email;
        //     $data->save();
        // }
        

        // if ($data) {
        //     return Redirect::route('contact-us')->with('success', 'Message has been sent.');
        // }else{
        //     return Redirect::route('contact-us')->with('success', 'Please try again later.');
        // }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
