@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0f0f2d] via-[#050014] to-black text-white font-mono px-6 py-10">

    {{-- HEADER --}}
    <header x-data="{ open: false }" class="mb-20 border-b border-cyan-500 pb-4">
        <div class="flex justify-between items-center">
            <div class="text-cyan-400 text-2xl font-bold">&lt;PERSONAL.WEB/&gt;</div>

            <!-- Hamburger for mobile -->
            <button @click="open = !open" class="md:hidden text-cyan-400 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Desktop menu -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#about" class="hover:text-cyan-300">[ABOUT]</a>
                <a href="#skills" class="hover:text-cyan-300">[SKILLS]</a>
                <a href="#projects" class="hover:text-cyan-300">[PROJECTS]</a>
                <a href="#contact" class="hover:text-cyan-300">[CONTACT]</a>
                <a href="{{ asset('files/cv_alvito-fahriel.pdf') }}" target="_blank"
                class="bg-cyan-400 text-black px-4 py-2 rounded shadow hover:bg-cyan-300 transition">
                    >> RESUME
                </a>
            </nav>
        </div>

        <!-- Mobile menu -->
        <div x-show="open" class="md:hidden mt-3 space-y-2">
            <a href="#about" class="block hover:text-cyan-300">[ABOUT]</a>
            <a href="#skills" class="block hover:text-cyan-300">[SKILLS]</a>
            <a href="#projects" class="block hover:text-cyan-300">[PROJECTS]</a>
            <a href="#contact" class="block hover:text-cyan-300">[CONTACT]</a>
            <a href="{{ asset('files/cv_alvito-fahriel.pdf') }}" target="_blank"
            class="block bg-cyan-400 text-black px-4 py-2 rounded shadow hover:bg-cyan-300 transition w-fit">
                >> RESUME
            </a>
        </div>
    </header>

    {{-- HERO --}}
    <main class="relative grid grid-cols-1 md:grid-cols-2 items-center gap-10 mb-24 px-4 sm:px-6 lg:px-8">
        <div class="text-center md:text-left z-10">
            <p class="text-cyan-400 mb-2 text-sm sm:text-base">>> INITIALIZING...</p>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-4 tracking-widest text-white drop-shadow-[0_0_10px_cyan]">
                ALVITO FAHRIEL
            </h1>
            <p class="text-gray-400 text-base sm:text-lg md:text-xl mb-6">Laravel & Machine Learning Developer</p>

            <div class="bg-black/30 border border-cyan-500 rounded p-4 mb-6 text-sm sm:text-base">
                <p>> <span class="text-cyan-400">System Status:</span> <span class="text-green-400">ONLINE</span></p>
                <p>> <span class="text-cyan-400">Mission:</span> Make life better by bringing small changes to the world</p>
            </div>

            <div class="flex flex-col sm:flex-row sm:justify-center md:justify-start gap-4">
                <a href="#projects" class="px-4 py-2 bg-blue-500 hover:bg-blue-400 rounded shadow text-sm sm:text-base">
                    >> VIEW_PROJECTS
                </a>
                <a href="#contact" class="px-4 py-2 bg-green-500 hover:bg-green-400 rounded shadow text-sm sm:text-base">
                    >> SEND_MESSAGE
                </a>
            </div>
        </div>

        <div class="relative w-full max-w-xs sm:max-w-sm md:max-w-md mx-auto mt-10 md:mt-0 z-10">
            <div class="border-4 border-cyan-500 p-2 rounded-xl shadow-2xl relative animate-neon-pulse">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="rounded w-full object-cover">
            </div>
        </div>
    </main>

    @include('partials.about')
    @include('partials.skills')
    @include('partials.projects')
    @include('partials.contact')

</div>
@endsection

