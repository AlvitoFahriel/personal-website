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

    {{-- SKILLS --}}
    <section id="skills" class="pt-20 scroll-mt-2 text-center">
        <h2 class="text-3xl font-bold text-cyan-400 mb-10">[ SKILLS ]</h2>
        <div class="flex flex-wrap justify-center gap-8 px-4">
            @php
                $skills = [
                    ['name' => 'HTML', 'slug' => 'html5'],
                    ['name' => 'CSS', 'slug' => 'css'],
                    ['name' => 'JavaScript', 'slug' => 'javascript'],
                    ['name' => 'PHP', 'slug' => 'php'],
                    ['name' => 'Laravel', 'slug' => 'laravel'],
                    ['name' => 'Python', 'slug' => 'python'],
                    ['name' => 'TensorFlow', 'slug' => 'tensorflow'],
                ];
            @endphp

            @foreach ($skills as $skill)
                <div class="tilt-icon w-24 h-24 bg-black/50 border border-cyan-500 rounded-full flex items-center justify-center shadow-xl hover:shadow-cyan-500/50 transition">
                    <img
                        src="https://cdn.simpleicons.org/{{ $skill['slug'] }}"
                        alt="{{ $skill['name'] }}"
                        class="w-12 h-12 object-contain"
                    >
                </div>
            @endforeach
        </div>
    </section>

    {{-- PROJECTS --}}
    <section id="projects" class="pt-20 scroll-mt-2 px-4">
        <h2 class="text-3xl font-bold text-cyan-400 mb-6 border-cyan-500 inline-block text-center">[PROJECTS]</h2>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ([
                ['title' => 'Website Pemesanan Tiket Acara', 'image' => 'project1.png', 'link' => 'https://github.com/agungbudisan/PPL-A_sistem_pemesanan_dan_pengelolaan_tiket_Event4U'],
                ['title' => 'Model ML Deteksi Jenis Sampah', 'image' => 'project2.png', 'link' => 'https://github.com/capstonec242ps168/Machine-Learning-Model'],
                ['title' => 'Crypto Bot Trading', 'image' => 'project3.png', 'link' => 'https://github.com/FadhilFarhan854/TradeAnlyticBot']
            ] as $project)
                <div class="w-full max-w-md bg-black/30 border border-cyan-500 rounded-2xl p-4 shadow-md hover:shadow-cyan-500/30 hover:scale-105 transition-all duration-300 mx-auto">
                    <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="rounded-lg mb-3 w-full h-40 object-cover">
                    <h3 class="text-lg font-semibold text-white mb-2">{{ $project['title'] }}</h3>
                    <a href="{{ $project['link'] }}" target="_blank" class="text-cyan-400 hover:underline hover:text-cyan-300 text-sm">
                        >> VIEW ON GITHUB
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="pt-20 scroll-mt-2 mb-10 px-4">
        <h2 class="text-3xl font-bold text-cyan-400 mb-6 border-cyan-500 inline-block">[CONTACT]</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <form action="#" method="POST" class="space-y-4 bg-black/30 border border-cyan-500 rounded p-6">
                <input type="text" name="name" placeholder="Your Name"
                    class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500">
                <input type="email" name="email" placeholder="Your Email"
                    class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500">
                <textarea name="message" rows="4" placeholder="Your Message"
                        class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
                <button type="submit" class="w-full sm:w-auto block text-center bg-cyan-400 text-black px-6 py-2 rounded hover:bg-cyan-300 transition-all duration-200">>> SEND MESSAGE</button>
            </form>

            <div class="text-gray-400 space-y-4 text-sm sm:text-base">
                <p>> Email: <a href="mailto:alvitomuh@gmail.com" class="text-cyan-400 hover:underline">alvitomuh@gmail.com</a></p>
                <p>> Phone: <span class="text-cyan-400">+62 814-6031-4307</span></p>
                <p>> Location: <span class="text-cyan-400">Indonesia</span></p>
                <p>> Linkedin: <a href="https://www.linkedin.com/in/alvito-fahriel/" target="_blank" class="text-cyan-400 hover:underline">linkedin.com/in/alvito-fahriel</a></p>
                <p>> GitHub: <a href="https://github.com/alvitofahriel" target="_blank" class="text-cyan-400 hover:underline">github.com/alvitofahriel</a></p>
            </div>
        </div>
    </section>


</div>
@endsection

