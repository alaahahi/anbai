<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

use App\Models\Customize;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Service;
use App\Models\Client;
use App\Models\Project;
use App\Models\Team;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        if (session('locale') == null) {

            session()->put('locale', 'ar');        
            app()->setLocale(session('locale'));

        }

        $locale = session('locale');
        $customize_share = Customize::get();
        $social_share = Social::limit(5)->get();
        $projects_share = Project::where('active',1)->limit(4)->get();

        $contact_share = Contact::orderByDesc('order')->first();
        $setting_share = Setting::first();
        $services_share = Service::orderBy('order')->where('active',1)->get();

        $projects_count = Project::where('active',1)->get()->count();
        $team_count = Team::get()->count();
        $clients_count = Client::get()->count();


        return array_merge(parent::share($request), [
            'locale' => $locale,
            'customize_share' => $customize_share,
            'contact_share' => $contact_share,
            'setting_share' => $setting_share,
            'social_share' => $social_share,
            'services_share' => $services_share,
            'projects_count' => $projects_count,
            'team_count' => $team_count,
            'clients_count' => $clients_count,
            'projects_share' => $projects_share,
            'flash' => [
                'message' => fn () => $request->session()->get('message')
            ],
        ]);
    }
}
