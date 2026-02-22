@extends('layouts.app')

@section('content')
<div class="p-6">

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Events</h1>

        <a href="{{ route('admin.events.create') }}"
            class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
            Add Event
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 border">#</th>
                    <th class="p-3 border">Photo</th>
                    <th class="p-3 border">Title</th>
                    <th class="p-3 border">Date</th>
                    <th class="p-3 border">Location</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($events as $event)
                <tr>
                    <td class="p-3 border">{{ $loop->iteration }}</td>

                    <td class="p-3 border">
                        @if($event->photo)
                        <img src="{{ asset('storage/'.$event->photo) }}"
                            class="w-16 h-16 object-cover rounded">
                        @else
                        —
                        @endif
                    </td>

                    <td class="p-3 border">{{ $event->title }}</td>
                    <td class="p-3 border">{{ $event->date }}</td>
                    <td class="p-3 border">{{ $event->location }}</td>

                    <td class="p-3 border space-x-2">
                        <a href="{{ route('admin.events.edit', $event) }}"
                            class="text-blue-600 hover:underline">
                            Edit
                        </a>

                        <form action="{{ route('admin.events.destroy', $event) }}"
                            method="POST"
                            class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline"
                                onclick="return confirm('Delete this event?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">
                        No events found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection