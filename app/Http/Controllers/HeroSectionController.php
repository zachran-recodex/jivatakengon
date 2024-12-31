<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroSectionStoreRequest;
use App\Http\Requests\HeroSectionUpdateRequest;
use App\Models\HeroSection;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::orderByDesc('id')->paginate(10);
        return view('dashboard.hero-section.index', compact('heroSections'));
    }

    public function create()
    {
        return view('dashboard.hero-section.create');
    }

    public function store(HeroSectionStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('hero-sections', 'public');
        }

        $validated['is_active'] = true;

        HeroSection::create($validated);

        flash()->success('Hero Section created successfully.');
        return redirect()->route('admin.hero-section.index');
    }

    public function edit(HeroSection $heroSection)
    {
        return view('dashboard.hero-section.edit', compact('heroSection'));
    }

    public function update(HeroSectionUpdateRequest $request, HeroSection $heroSection)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($heroSection->image) {
                Storage::disk('public')->delete($heroSection->image);
            }
            $validated['image'] = $request->file('image')->store('hero-sections', 'public');
        }

        $heroSection->update($validated);

        flash()->success('Hero Section updated successfully.');
        return redirect()->route('admin.hero-section.index');
    }

    public function destroy(HeroSection $heroSection)
    {
        if ($heroSection->image) {
            Storage::disk('public')->delete($heroSection->image);
        }

        $heroSection->delete();

        flash()->success('Hero Section deleted successfully.');
        return redirect()->route('admin.hero-section.index');
    }
}
