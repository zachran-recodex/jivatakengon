<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccommodationStoreRequest;
use App\Http\Requests\AccommodationUpdateRequest;
use App\Models\Accommodation;
use Illuminate\Support\Facades\Storage;

class AccommodationController extends Controller
{
    public function index()
    {
        $accommodations = Accommodation::orderByDesc('id')->paginate(10);
        return view('dashboard.accommodation.index', compact('accommodations'));
    }

    public function create()
    {
        return view('dashboard.accommodation.create');
    }

    public function store(AccommodationStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('accommodations', 'public');
        }

        $validated['is_active'] = true;

        Accommodation::create($validated);

        flash()->success('Accommodation created successfully.');
        return redirect()->route('admin.accommodation.index');
    }

    public function edit(Accommodation $accommodation)
    {
        return view('dashboard.accommodation.edit', compact('accommodation'));
    }

    public function update(AccommodationUpdateRequest $request, Accommodation $accommodation)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($accommodation->image) {
                Storage::disk('public')->delete($accommodation->image);
            }
            $validated['image'] = $request->file('image')->store('accommodations', 'public');
        }

        $accommodation->update($validated);

        flash()->success('Accommodation updated successfully.');
        return redirect()->route('admin.accommodation.index');
    }

    public function destroy(Accommodation $accommodation)
    {
        if ($accommodation->image) {
            Storage::disk('public')->delete($accommodation->image);
        }

        $accommodation->delete();

        flash()->success('Accommodation deleted successfully.');
        return redirect()->route('admin.accommodation.index');
    }
}
