@extends('layouts.app')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold">Contact Messages</h1>
</div>

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full border-collapse">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 border">#</th>
                <th class="p-3 border">Name</th>
                <th class="p-3 border">Email</th>
                <th class="p-3 border">Message</th>
                <th class="p-3 border">Date</th>
            </tr>
        </thead>

        <tbody>
            @forelse($contacts as $index => $contact)
            <tr class="hover:bg-gray-50">
                <td class="p-3 border">{{ $index + 1 }}</td>
                <td class="p-3 border">{{ $contact->name }}</td>
                <td class="p-3 border">{{ $contact->email }}</td>
                <td class="p-3 border">{{ $contact->message }}</td>
                <td class="p-3 border">
                    {{ $contact->created_at->format('d M Y') }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="p-4 text-center text-gray-500">
                    No contact messages found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection