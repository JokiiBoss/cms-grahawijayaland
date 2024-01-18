<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::with('project')->first();
        $events = Promotion::all();

        return view('home.index', compact('settings', 'events'));
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
