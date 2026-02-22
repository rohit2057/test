<header class="bg-white/80 backdrop-blur border-b sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Clickable Logo / Title -->
        <a href="{{ url('/') }}" class="text-xl font-bold tracking-wide hover:opacity-80">
            College Event Management System
        </a>

        <nav class="flex items-center gap-6">
            <a href="{{ route('events') }}" class="text-sm font-medium hover:underline">Events</a>
            <a href="{{ route('about-us') }}" class="text-sm font-medium hover:underline">About Us</a>
            <a href="{{ route('contact-us') }}" class="text-sm font-medium hover:underline">Contact Us</a>

            <!-- Admin login only -->
            <a href="{{ route('login') }}"
                class="px-4 py-2 bg-black text-white rounded-md text-sm hover:bg-gray-800">
                Admin Login
            </a>
        </nav>

    </div>
</header>