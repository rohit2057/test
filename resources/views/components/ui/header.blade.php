<header class="bg-white/80 backdrop-blur border-b sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold tracking-wide">
            College Event Management System
        </h1>

        @if (Route::has('login'))
        <nav class="flex items-center gap-6">
            <a href="{{ route('events') }}" class="text-sm font-medium hover:underline">Events</a>
            <a href="{{ route('about-us') }}" class="text-sm font-medium hover:underline">About Us</a>
            <a href="{{ route('contact-us') }}" class="text-sm font-medium hover:underline">Contact Us</a>

            @auth
            <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-black text-white rounded-md text-sm hover:bg-gray-800">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="text-sm font-medium hover:underline">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="px-4 py-2 bg-black text-white rounded-md text-sm hover:bg-gray-800">Register</a>
            @endif
            @endauth
        </nav>
        @endif
    </div>
</header>