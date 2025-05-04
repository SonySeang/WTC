<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $feature = Feature::all();
        return view('feature', compact('feature'));
    }
    public function service()
    {
        $feature = Feature::all();
        return view('admin.feature', compact('feature'));
    }
    public function show($id)
    {
        $feature = Feature::find($id);
        return view('feature.show', compact('feature'));
    }
    public function create(Request $request)
    {
        $validated  = $request->validate([
            'title' => 'required|string|max:30',
            'icon' => 'required|string|max:30',
        ]);
        Feature::create(
            $validated
        );
        return redirect()->route('admin.feature')->with('success', 'Feature created successfully');
    }
    public function edit($id)
    {
        $feature = Feature::findOrFail($id);
        return view('admin.edit', compact('feature'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:30',
            'icon' => 'required|string|max:30',
        ]);

        $feature = Feature::findOrFail($id);
        $feature->update($validated);

        // Redirect back to the feature list with a success message
        return redirect()->route('admin.feature')->with('success', 'Feature updated successfully!');
    }
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id);
        $feature->delete();
        return redirect()->route('admin.feature')->with('success', 'Feature deleted successfully');
    }
}
