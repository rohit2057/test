@extends('layouts.app')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16">
    <h1 class="text-5xl font-extrabold text-center mb-12 text-indigo-600">
        Upcoming College Events
    </h1>

    <p class="text-center text-gray-700 max-w-3xl mx-auto mb-16 text-lg">
        Explore the exciting events happening on campus — from workshops and seminars to cultural fests and sports competitions. Stay informed and get involved!
    </p>

    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
        {{-- Example event card --}}
        <article class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-semibold px-3 py-1 rounded-full">
                    Seminar
                </span>
                <time class="text-gray-400 text-xs" datetime="2025-03-25">
                    📅 25 March 2025
                </time>
            </div>

            <h2 class="text-xl font-semibold text-gray-900 mb-2 hover:text-indigo-600 cursor-pointer">
                AI & Machine Learning Seminar
            </h2>

            <p class="text-gray-600 flex-grow mb-4">
                Learn the fundamentals and future scope of AI and Machine Learning with expert speakers.
            </p>

            <div class="text-sm text-gray-500 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.5 0-4 1-4 4s2.5 4 4 4 4-1.5 4-4-2.5-4-4-4z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4" />
                </svg>
                Seminar Hall
            </div>
        </article>

        {{-- Repeat for other events --}}
        <article class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                    Workshop
                </span>
                <time class="text-gray-400 text-xs" datetime="2025-04-02">
                    📅 2 April 2025
                </time>
            </div>

            <h2 class="text-xl font-semibold text-gray-900 mb-2 hover:text-green-600 cursor-pointer">
                Web Development Workshop
            </h2>

            <p class="text-gray-600 flex-grow mb-4">
                Hands-on workshop to build modern web applications using latest technologies.
            </p>

            <div class="text-sm text-gray-500 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A2 2 0 013 15.382V7.618a2 2 0 011.553-1.894L9 4m6 16l5.447-2.724A2 2 0 0021 15.382V7.618a2 2 0 00-1.553-1.894L15 4m-6 0v16m6-16v16" />
                </svg>
                Computer Lab
            </div>
        </article>

        <article class="bg-white rounded-xl shadow-md hover:shadow-lg transition p-6 flex flex-col">
            <div class="flex items-center justify-between mb-3">
                <span class="inline-block bg-pink-100 text-pink-800 text-xs font-semibold px-3 py-1 rounded-full">
                    Cultural
                </span>
                <time class="text-gray-400 text-xs" datetime="2025-04-10">
                    📅 10 April 2025
                </time>
            </div>

            <h2 class="text-xl font-semibold text-gray-900 mb-2 hover:text-pink-600 cursor-pointer">
                Annual Cultural Fest
            </h2>

            <p class="text-gray-600 flex-grow mb-4">
                Enjoy music, dance, and performances by our talented students.
            </p>

            <div class="text-sm text-gray-500 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422M12 14L5.84 10.578M12 14v7" />
                </svg>
                College Ground
            </div>
        </article>
    </div>
</section>
@endsection