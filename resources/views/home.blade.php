@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0f0f2d] via-[#050014] to-black text-white font-mono px-6 py-10">
    <header class="flex justify-between items-center mb-20 border-b border-cyan-500 pb-4">
        <div class="text-cyan-400 text-xl font-bold">&lt;NEURAL_NET/&gt;</div>
        <nav class="space-x-6">
            <a href="#" class="hover:text-cyan-300">[ABOUT]</a>
            <a href="#" class="hover:text-cyan-300">[SKILLS]</a>
            <a href="#" class="hover:text-cyan-300">[PROJECTS]</a>
            <a href="#" class="hover:text-cyan-300">[CONTACT]</a>
        </nav>
        <a href="#" class="bg-cyan-400 text-black px-4 py-2 rounded shadow hover:bg-cyan-300 transition">>> RESUME</a>
    </header>

    <main class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
        <div>
            <p class="text-cyan-400 mb-2">>> INITIALIZING...</p>
            <h1 class="text-5xl font-extrabold mb-4 tracking-widest text-white drop-shadow-[0_0_10px_cyan]">CYBER_DEV</h1>
            <p class="text-gray-400 text-xl mb-6">Full Stack Developer & Digital Architect</p>

            <div class="bg-black/30 border border-cyan-500 rounded p-4 mb-6">
                <p>> <span class="text-cyan-400">System Status:</span> <span class="text-green-400">ONLINE</span></p>
                <p>> <span class="text-cyan-400">Skills:</span> React, Node.js, AI Integration</p>
                <p>> <span class="text-cyan-400">Mission:</span> Building the future, one line at a time</p>
            </div>

            <div class="flex space-x-4">
                <a href="#" class="px-4 py-2 bg-blue-500 hover:bg-blue-400 rounded shadow">>> VIEW_PROJECTS</a>
                <a href="#" class="px-4 py-2 bg-green-500 hover:bg-green-400 rounded shadow">>> ESTABLISH_CONTACT</a>
            </div>
        </div>

        <div class="relative w-full max-w-sm mx-auto">
            <div class="border-4 border-cyan-500 p-2 rounded-xl shadow-2xl relative">
                <img src="{{ asset('img/photo.jpg') }}" alt="Profile" class="rounded w-full object-cover">
                <div class="absolute top-2 left-2 text-xs text-cyan-400">&lt;/&gt;</div>
                <div class="absolute bottom-2 right-2 text-xs text-green-400">AI</div>
                <div class="absolute top-2 right-2 text-yellow-300 text-lg">⚡</div>
            </div>
        </div>
    </main>
</div>
@endsection
