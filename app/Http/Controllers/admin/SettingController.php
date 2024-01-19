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
        $project = Project::all();
        $settings = Setting::firstOrCreate();

        return view('admin.settings.index', compact('settings', 'project'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'no_whatsapp' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'status_settings' => 'boolean',
        ]);

        try {
            $setting = Setting::findOrFail($id);

            $setting->no_whatsapp = $request->input('no_whatsapp');

            if ($request->has('description')) {
                $setting->description = $request->input('description');
            }

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('jumbotron_images', 'public');
                $setting->image = $imagePath;
            }

            if ($request->has('status_settings')) {
                $setting->status_settings = $request->input('status_settings');
            }

            $setting->save();

            return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update settings. Please try again.');
        }
    }



    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $projects = Project::all();

    //     return view('admin.settings.create', compact('projects'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $projects = Project::all();

    //     return view('admin.settings.edit', compact('setting', 'projects'));
    // }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
