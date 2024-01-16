<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        // Mengubah format harga menjadi mata uang Rupiah
        foreach ($projects as $project) {
            $project->price = 'Rp ' . number_format($project->price, 2, ',', '.');
        }

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'qr_code' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'location' => 'required',
            ]);

            $imagePath = $request->file('image')->store('image_project', 'public');
            $logoPath = $request->file('logo') ? $request->file('logo')->store('logo_project', 'public') : null;
            $qrCodePath = $request->file('qr_code') ? $request->file('qr_code')->store('uploads', 'public') : null;

            $project = Project::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $imagePath,
                'price' => $request->input('price'),
                'logo' => $logoPath,
                'qr_code' => $qrCodePath,
                'location' => $request->input('location'),
            ]);

            return redirect()->route('admin.projects.index')->with('success', 'Project created successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'Validation failed. Please check your input and try again.');
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();

            return redirect()->back()->with('error', "Failed to create project. Error: $errorMessage. Please try again.");
        }
    }



    public function show(string $id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.show', compact('project'));
    }


    public function edit(string $id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'qr_code' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'required',
        ]);

        $project = Project::findOrFail($id);

        try {
            // Update existing project data
            $project->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'location' => $request->input('location'),
            ]);

            // Update image, logo, and qr_code if provided
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image_project', 'public');
                $project->update(['image' => $imagePath]);
            }

            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('logo_project', 'public');
                $project->update(['logo' => $logoPath]);
            }

            if ($request->hasFile('qr_code')) {
                $qrCodePath = $request->file('qr_code')->store('uploads', 'public');
                $project->update(['qr_code' => $qrCodePath]);
            }

            return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
        } catch (\Exception $e) {
            dd($e->getMessage()); // Debugging statement to see the exception message
            return redirect()->back()->with('error', 'Failed to update project. Please try again.');
        }
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        Storage::delete('public/image_project/' . $project->image);
        Storage::delete('public/logo_project/' . $project->logo);

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }
}
