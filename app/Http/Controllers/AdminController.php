<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Event;

class AdminController extends Controller
{


    public function dashboard()
    {
        return view('admin.dashboard', [
            'totalEvents' => Event::count(),
            'totalContacts' => Contact::count(),
            'newContacts' => Contact::where('created_at', '>=', now()->subDays(7))->count(),
            'upcomingEvents' => Event::whereDate('date', '>=', now())
                ->orderBy('date')
                ->limit(5)
                ->get(),
            'recentContacts' => Contact::latest()->limit(5)->get(),
        ]);
    }

    public function events()
    {
        return view('admin.events');
    }

    public function contact()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact', compact('contacts'));
    }
}
