@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Edit Event</h2>

<form action="{{ route('admin.events.update', $event) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Title</label>
        <input type="text"
            name="title"
            value="{{ old('title', $event->title) }}"
            class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Date</label>
        <input type="date"
            name="date"
            value="{{ old('date', $event->date) }}"
            class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Location</label>
        <input type="text"
            name="location"
            value="{{ old('location', $event->location) }}"
            class="w-full border p-2">
    </div>

    <div class="mb-3">
        <label>Event Photo</label>
        <input type="file" name="photo" class="w-full border p-2">

        @if($event->photo)
        <img src="{{ asset('storage/'.$event->photo) }}"
            class="w-24 mt-2 rounded">
        @endif
    </div>

    <button class="bg-black text-white px-4 py-2 rounded">
        Update Event
    </button>
</form>
@endsection