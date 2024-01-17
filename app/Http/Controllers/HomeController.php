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

        return view('index', compact('settings', 'events'));
    }
}
