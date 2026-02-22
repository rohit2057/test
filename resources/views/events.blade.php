@extends('layouts.public')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-24">
    <h1 class="text-4xl font-bold mb-10 text-center">Upcoming Events</h1>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @forelse($events as $event)
        <div class="bg-white rounded-xl p-6 shadow hover:shadow-md transition">

            <span class="text-sm text-indigo-600 font-medium">
                Event
            </span>

            <h3 class="text-lg font-semibold mt-2">
                {{ $event->title }}
            </h3>


            <p class="text-sm text-gray-500 mt-4">
                {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}
                &nbsp; | &nbsp;
                {{ $event->location }}
            </p>

            @if($event->photo)
            <img src="{{ asset('storage/'.$event->photo) }}"
                class="mt-4 rounded-lg h-40 w-full object-cover">
            @else
            <img src="{{ asset('images/placeholder.png') }}"
                alt="No Image Available"
                class="mt-4 rounded-lg h-40 w-full object-cover">
            @endif

        </div>
        @empty
        <p class="col-span-3 text-center text-gray-500">
            No upcoming events available.
        </p>
        @endforelse

    </div>
</section>
@endsection