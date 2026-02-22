@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

{{-- STATS --}}
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">Total Events</p>
        <h2 class="text-3xl font-bold">{{ $totalEvents }}</h2>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">Total Messages</p>
        <h2 class="text-3xl font-bold">{{ $totalContacts }}</h2>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">New Messages (7 days)</p>
        <h2 class="text-3xl font-bold">{{ $newContacts }}</h2>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">Upcoming Events</p>
        <h2 class="text-3xl font-bold">{{ $upcomingEvents->count() }}</h2>
    </div>
</div>

{{-- RECENT CONTACTS --}}
<div class="bg-white shadow rounded-lg p-6 mb-10">
    <h2 class="text-xl font-semibold mb-4">Recent Contact Messages</h2>

    @forelse($recentContacts as $contact)
    <div class="border-b py-3">
        <p class="font-medium">{{ $contact->name }} ({{ $contact->email }})</p>
        <p class="text-sm text-gray-600 truncate">{{ $contact->message }}</p>
    </div>
    @empty
    <p class="text-gray-500">No messages yet.</p>
    @endforelse
</div>

{{-- UPCOMING EVENTS --}}
<div class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold mb-4">Upcoming Events</h2>

    @forelse($upcomingEvents as $event)
    <div class="border-b py-3">
        <p class="font-medium">{{ $event->title }}</p>
        <p class="text-sm text-gray-600">
            📅 {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}
            | 📍 {{ $event->location }}
        </p>
    </div>
    @empty
    <p class="text-gray-500">No upcoming events.</p>
    @endforelse
</div>
@endsection