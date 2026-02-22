<aside class="w-64 bg-white min-h-screen fixed top-16 left-0 border-r border-gray-200">
    <!-- Sidebar Title -->
    <div class="px-6 py-5 text-lg font-bold text-gray-800 border-b border-gray-200">
        Admin Panel
    </div>

    <!-- Menu -->
    <nav class="mt-4 flex flex-col gap-1 px-3">
        <a href="{{ route('admin.dashboard') }}"
            class="{{ request()->routeIs('admin.dashboard') ? 'font-semibold text-black' : '' }}">
            Dashboard
        </a>

        <a href="{{ route('admin.events') }}"
            class="{{ request()->routeIs('admin.events') ? 'font-semibold text-black' : '' }}">
            Events
        </a>

        <a href="{{ route('admin.contact') }}"
            class="{{ request()->routeIs('admin.contact') ? 'font-semibold text-black' : '' }}">
            Contact
        </a>
    </nav>
</aside>