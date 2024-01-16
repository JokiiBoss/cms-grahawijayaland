<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();

        if ($settings->isEmpty()) {
            return view('admin.settings.index')->with('message', 'No settings found.');
        }

        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();

        return view('admin.settings.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { {
            $request->validate([
                'project_id' => 'required|exists:projects,id',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required',
                'no_whatsapp' => 'required',
            ]);

            $imagePath = $request->file('image') ? $request->file('image')->store('setting_images', 'public') : null;

            Setting::create([
                'project_id' => $request->input('project_id'),
                'image' => $imagePath,
                'description' => $request->input('description'),
                'no_whatsapp' => $request->input('no_whatsapp'),
            ]);

            return redirect()->route('admin.settings.create')->with('success', 'Setting created successfully!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projects = Project::all();

        return view('admin.settings.edit', compact('setting', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
