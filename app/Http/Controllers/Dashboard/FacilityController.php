<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityStoreRequest;
use App\Http\Requests\FacilityUpdateRequest;
use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        $icons = config('icons');

        $facilities = Facility::orderByDesc('id')->paginate(10);
        return view('dashboard.facility.index', compact('facilities', 'icons'));
    }

    public function create()
    {
        $icons = config('icons');

        return view('dashboard.facility.create', compact('icons'));
    }

    public function store(FacilityStoreRequest $request)
    {
        $validated = $request->validated();

        $validated['is_active'] = true;

        Facility::create($validated);

        flash()->success('Facility created successfully.');
        return redirect()->route('admin.facility.index');
    }

    public function edit(Facility $facility)
    {
        $icons = config('icons');

        return view('dashboard.facility.edit', compact('facility', 'icons'));
    }

    public function update(FacilityUpdateRequest $request, Facility $facility)
    {
        $validated = $request->validated();

        $facility->update($validated);

        flash()->success('Facility updated successfully.');
        return redirect()->route('admin.facility.index');
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();

        flash()->success('Facility deleted successfully.');
        return redirect()->route('admin.facility.index');
    }
}
