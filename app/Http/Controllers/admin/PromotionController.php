<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('admin.promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('promotion_images', 'public');

        Promotion::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.promotions.index')->with('success', 'Promotion created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('admin.promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $promotions = Promotion::findOrFail($id);

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image')->store('promotion_images', 'public');

            Storage::delete('public/promotion_images/' . basename($promotions->image));

            $promotions->update([
                'image'     => $imagePath,
                'title'     => $request->input('title'),
                'content'   => $request->input('content')
            ]);
        } else {

            $promotions->update([
                'title'     => $request->input('title'),
                'content'   => $request->input('content')
            ]);
        }

        return redirect()->route('admin.promotions.index')->with(['success' => 'Event and promotion updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $promo = Promotion::findOrFail($id);

        $promo->delete();

        return redirect()->route('admin.promotions.index')->with('success', 'Event and Promo deleted successfully!');
    }
}
