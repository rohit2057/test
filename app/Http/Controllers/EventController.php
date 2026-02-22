<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();
        return view('admin.events', compact('events'));
    }

    public function create()
    {
        return view('admin.event-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('events', 'public');
        }

        Event::create([
            'title' => $request->title,
            'date' => $request->date,
            'location' => $request->location,
            'photo' => $photoPath,
        ]);

        return redirect()->route('admin.events');
    }

    public function edit(Event $event)
    {
        return view('admin.event-edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($event->photo) {
                Storage::disk('public')->delete($event->photo);
            }

            $event->photo = $request->file('photo')->store('events', 'public');
        }

        $event->update([
            'title' => $request->title,
            'date' => $request->date,
            'location' => $request->location,
        ]);

        return redirect()->route('admin.events');
    }

    public function destroy(Event $event)
    {
        if ($event->photo) {
            Storage::disk('public')->delete($event->photo);
        }

        $event->delete();

        return redirect()->route('admin.events');
    }
}
