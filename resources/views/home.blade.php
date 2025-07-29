@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0f0f2d] via-[#050014] to-black text-white font-mono px-6 py-10">

    {{-- HEADER --}}
    <header class="flex justify-between items-center mb-20 border-b border-cyan-500 pb-4">
        <div class="text-cyan-400 text-xl font-bold">&lt;PERSONAL.WEB/&gt;</div>
        <nav class="space-x-6">
            <a href="#" class="hover:text-cyan-300">[ABOUT]</a>
            <a href="#skills" class="hover:text-cyan-300">[SKILLS]</a>
            <a href="#projects" class="hover:text-cyan-300">[PROJECTS]</a>
            <a href="#contact" class="hover:text-cyan-300">[CONTACT]</a>
        </nav>
        <a href="#" class="bg-cyan-400 text-black px-4 py-2 rounded shadow hover:bg-cyan-300 transition">>> RESUME</a>
    </header>

    {{-- HERO --}}
    <main class="grid grid-cols-1 md:grid-cols-2 items-center gap-10 mb-24">
        <div>
            <p class="text-cyan-400 mb-2">>> INITIALIZING...</p>
            <h1 class="text-5xl font-extrabold mb-4 tracking-widest text-white drop-shadow-[0_0_10px_cyan]">ALVITO FAHRIEL</h1>
            <p class="text-gray-400 text-xl mb-6">Laravel & Machine Learning Developer</p>

            <div class="bg-black/30 border border-cyan-500 rounded p-4 mb-6">
                <p>> <span class="text-cyan-400">System Status:</span> <span class="text-green-400">ONLINE</span></p>
                <p>> <span class="text-cyan-400">Mission:</span> Make life better by bringing small changes to the world</p>
            </div>

            <div class="flex space-x-4">
                <a href="#projects" class="px-4 py-2 bg-blue-500 hover:bg-blue-400 rounded shadow">>> VIEW_PROJECTS</a>
                <a href="#contact" class="px-4 py-2 bg-green-500 hover:bg-green-400 rounded shadow">>> ESTABLISH_CONTACT</a>
            </div>
        </div>

        <div class="relative w-full max-w-sm mx-auto">
            <div class="border-4 border-cyan-500 p-2 rounded-xl shadow-2xl relative">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile" class="rounded w-full object-cover">
            </div>
        </div>
    </main>

    {{-- SKILLS --}}
    <section class="mt-24 text-center">
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
                    ['name' => 'React', 'slug' => 'tensorflow'],
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
    <section id="projects" class="mt-24">
        <h2 class="text-3xl font-bold text-cyan-400 mb-6 border-b border-cyan-500 inline-block">[PROJECTS]</h2>
        <div class="grid md:grid-cols-2 gap-8">
            @foreach ([
                ['title' => 'Website Pemesanan Tiket Acara', 'image' => 'project1.png', 'link' => 'https://github.com/agungbudisan/PPL-A_sistem_pemesanan_dan_pengelolaan_tiket_Event4U'],
                ['title' => 'Model ML Deteksi Jenis Sampah', 'image' => 'project2.png', 'link' => 'https://github.com/capstonec242ps168/Machine-Learning-Model']
            ] as $project)
                <div class="bg-black/30 border border-cyan-500 rounded-lg p-4 shadow-lg hover:bg-[#1a1a2e] transition">
                    <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="rounded mb-4 w-full h-40 object-cover">
                    <h3 class="text-xl text-white font-semibold mb-2">{{ $project['title'] }}</h3>
                    <a href="{{ $project['link'] }}" target="_blank" class="text-cyan-400 hover:text-cyan-300">>> VIEW ON GITHUB</a>
                </div>
            @endforeach
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="mt-24 mb-10">
        <h2 class="text-3xl font-bold text-cyan-400 mb-6 border-b border-cyan-500 inline-block">[CONTACT]</h2>
        <div class="grid md:grid-cols-2 gap-10">
            <form action="#" method="POST" class="space-y-4 bg-black/30 border border-cyan-500 rounded p-6">
                <input type="text" name="name" placeholder="Your Name" class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded">
                <input type="email" name="email" placeholder="Your Email" class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded">
                <textarea name="message" rows="4" placeholder="Your Message" class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded"></textarea>
                <button type="submit" class="bg-cyan-400 text-black px-6 py-2 rounded hover:bg-cyan-300">>> SEND MESSAGE</button>
            </form>
            <div class="text-gray-400 space-y-2">
                <p>> Email: <a href="mailto:you@example.com" class="text-cyan-400">alvitomuh@gmail.com</a></p>
                <p>> Phone: <span class="text-cyan-400">+62 814-6031-4307</span></p>
                <p>> Location: <span class="text-cyan-400">Indonesia</span></p>
                <p>> GitHub: <a href="https://github.com/alvitofahriel" target="_blank" class="text-cyan-400">github.com/AlvitoFahriel</a></p>
            </div>
        </div>
    </section>

</div>
@endsection

