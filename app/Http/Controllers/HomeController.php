<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Promotion;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $events = Promotion::all();
        $projects = Project::all();

        return view('home.index', compact('settings', 'events', 'projects'));
    }

    public function villaKalasan()
    {
        return view('home.villa_kalasan');
    }

    public function allProjects()
    {
        return view('home.projects');
    }
}
