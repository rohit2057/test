@extends('layouts.app')

@section('content')
<h2 class="text-xl font-bold mb-4">Add Event</h2>

<form action="{{ route('admin.events.store') }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label class="block mb-1">Title</label>
        <input type="text" name="title" class="w-full border p-2 rounded">
    </div>

    <div class="mb-3">
        <label class="block mb-1">Date</label>
        <input type="date" name="date" class="w-full border p-2 rounded">
    </div>

    <div class="mb-3">
        <label class="block mb-1">Location</label>
        <input type="text" name="location" class="w-full border p-2 rounded">
    </div>

    <div class="mb-3">
        <label class="block mb-1">Event Photo</label>
        <input type="file" name="photo" class="w-full border p-2 rounded">
    </div>

    <button class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
        Save Event
    </button>
</form>
@endsection