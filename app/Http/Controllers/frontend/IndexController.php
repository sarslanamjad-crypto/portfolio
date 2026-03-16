<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\SiteSetting;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Partner;
use App\Models\backend\Projects;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        $services = Service::all();
        $skills = Skill::all();
        $partners = Partner::all();
        $projects = Projects::where('status', 1)->get();
        $testimonials = Testimonial::where('status', 1)->orderBy('created_at', 'desc')->get();
        
        return view('index', compact('settings', 'services', 'skills', 'partners', 'projects', 'testimonials'));
    }

    public function showProject($id)
    {
        $project = Projects::findOrFail($id);
        return view('project-details', compact('project'));
    }
}
