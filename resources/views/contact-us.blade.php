@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
    <h1 class="text-4xl font-bold mb-8 text-center text-indigo-600">Contact Us</h1>

    <p class="text-center text-gray-700 mb-12 max-w-xl mx-auto">
        Have questions or want to get in touch? Fill out the form below and we'll get back to you as soon as possible.
    </p>

    <form action="#" method="POST" class="bg-white shadow-md rounded-lg p-8 space-y-6">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Write your message here" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 resize-none focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <button type="submit"
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md py-3 transition-colors">
            Send Message
        </button>
    </form>

    <div class="mt-12 text-center text-gray-600">
        <p>Or reach us at:</p>
        <p class="mt-2">📞 +1 234 567 890 | 📧 support@collegeevents.com</p>
        <p class="mt-1">🏢 123 College Ave, University Town, Country</p>
    </div>
</section>
@endsection