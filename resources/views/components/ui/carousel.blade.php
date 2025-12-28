<section class="max-w-7xl mx-auto px-6 py-24">
    <div class="grid lg:grid-cols-2 gap-12 items-center">

        <div class="text-center lg:text-left">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                One Platform to Manage<br>
                <span class="text-indigo-600">All College Events</span>
            </h2>

            <p class="text-gray-600 max-w-xl mb-10">
                Stay updated with seminars, workshops, cultural programs,
                and sports events through a simple and organized web system.
            </p>

            <div class="flex justify-center lg:justify-start gap-4">
                <a href="#overview"
                    class="px-6 py-3 bg-black text-white rounded-md text-sm font-medium hover:bg-gray-800">
                    Explore System
                </a>

                @guest
                <a href="{{ route('register') }}"
                    class="px-6 py-3 border border-black rounded-md text-sm font-medium hover:bg-black hover:text-white">
                    Get Started
                </a>
                @endguest
            </div>
        </div>

        <div class="relative w-full max-w-md mx-auto overflow-hidden rounded-xl shadow-lg">
            <div id="carousel" class="flex transition-transform duration-700">
                <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94"
                    class="w-full flex-shrink-0 object-cover" alt="Seminar">

                <img src="https://images.unsplash.com/photo-1503428593586-e225b39bddfe"
                    class="w-full flex-shrink-0 object-cover" alt="Fest">

                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655"
                    class="w-full flex-shrink-0 object-cover" alt="Workshop">
            </div>
        </div>

    </div>
</section>