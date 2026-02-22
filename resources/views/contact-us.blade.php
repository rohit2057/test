@extends('layouts.public')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-24">
    <h1 class="text-4xl font-bold mb-8 text-center">Contact Us</h1>

    <div class="bg-white rounded-xl shadow p-8">

        {{-- Success Message --}}
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-md">
            {{ session('success') }}
        </div>
        @endif

        {{-- Contact Form --}}
        <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium">Name</label>
                <input type="text"
                    name="name"
                    required
                    class="w-full mt-1 rounded-md border-gray-300 focus:ring-black focus:border-black">
            </div>

            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email"
                    name="email"
                    required
                    class="w-full mt-1 rounded-md border-gray-300 focus:ring-black focus:border-black">
            </div>

            <div>
                <label class="block text-sm font-medium">Message</label>
                <textarea rows="4"
                    name="message"
                    required
                    class="w-full mt-1 rounded-md border-gray-300 focus:ring-black focus:border-black"></textarea>
            </div>

            <button type="submit"
                class="px-6 py-3 bg-black text-white rounded-md hover:bg-gray-800">
                Send Message
            </button>
        </form>
    </div>
</section>
@endsection