<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderByDesc('id')->paginate(10);
        return view('dashboard.event.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.event.create');
    }

    public function store(EventStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        $validated['is_active'] = true;

        Event::create($validated);

        flash()->success('Event created successfully.');
        return redirect()->route('admin.event.index');
    }

    public function edit(Event $event)
    {
        return view('dashboard.event.edit', compact('event'));
    }

    public function update(EventUpdateRequest $request, Event $event)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $validated['image'] = $request->file('image')->store('events', 'public');
        }

        $event->update($validated);

        flash()->success('Event updated successfully.');
        return redirect()->route('admin.event.index');
    }

    public function destroy(Event $event)
    {
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        flash()->success('Event deleted successfully.');
        return redirect()->route('admin.event.index');
    }
}
