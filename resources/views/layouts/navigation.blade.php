<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-16 items-center">

            <!-- App Name -->
            <a href="{{ route('dashboard') }}"
                class="text-lg font-bold text-gray-800">
                College Event Management System
            </a>

            <!-- User + Logout -->
            <div class="hidden sm:flex items-center gap-4">
                <span class="text-sm text-gray-600">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        type="submit"
                        class="px-4 py-2 bg-black text-white text-sm rounded hover:bg-gray-800">
                        Logout
                    </button>
                </form>
            </div>

            <!-- Hamburger (optional) -->
            <div class="sm:hidden">
                <button @click="open = !open" class="p-2 text-gray-600">
                    ☰
                </button>
            </div>

        </div>
    </div>
</nav>