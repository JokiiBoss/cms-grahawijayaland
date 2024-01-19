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
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required',
                'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'qr_code' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'location' => 'required',
                'status_project' => 'boolean',
            ]);

            $imagePath = $request->file('image') ? $request->file('image')->store('image_project', 'public') : null;
            $logoPath = $request->file('logo') ? $request->file('logo')->store('logo_project', 'public') : null;
            $qrCodePath = $request->file('qr_code') ? $request->file('qr_code')->store('qr_project', 'public') : null;

            $project = Project::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'image' => $imagePath,
                'price' => $request->input('price'),
                'logo' => $logoPath,
                'qr_code' => $qrCodePath,
                'location' => $request->input('location'),
                'status_project' => $request->input('status_project', false)
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

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'qr_code' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'location' => 'required',
                'status_project' => 'boolean',
            ]);

            $project = Project::findOrFail($id);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('image_project', 'public');
                Storage::delete('public/' . $project->image);
                $project->image = $imagePath;
            }

            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('logo_project', 'public');
                if ($project->logo) {
                    Storage::delete('public/' . $project->logo);
                }

                $project->logo = $logoPath;
            }

            if ($request->hasFile('qr_code')) {
                $qrCodePath = $request->file('qr_code')->store('qr_project', 'public');

                if ($project->qr_code) {
                    Storage::delete('public/' . $project->qr_code);
                }

                $project->qr_code = $qrCodePath;
            }

            $project->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'location' => $request->input('location'),
                'status_project' => $request->input('status_project', false)
            ]);

            return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'Validation failed. Please check your input and try again.');
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return redirect()->back()->with('error', "Failed to update project. Error: $errorMessage. Please try again.");
        }
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image) {
            $imagePath = 'public/image_project/' . $project->image;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }

        if ($project->logo) {
            $logoPath = 'public/logo_project/' . $project->logo;
            if (Storage::exists($logoPath)) {
                Storage::delete($logoPath);
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully!');
    }
}
