<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Contact;

class HomeController extends Controller
{
    public function about()
    {
        return view('about-us');
    }

    public function events()
    {
        return view('events');
    }

    public function contact()
    {
        return view('contact-us');
    }
    public function viewEvents()
    {
        $events = Event::orderBy('date', 'asc')->get();

        return view('events', compact('events'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return back()->with('success', 'Thank you for your message!');
    }
}
