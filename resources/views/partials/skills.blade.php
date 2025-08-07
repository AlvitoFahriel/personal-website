{{-- SKILLS --}}
<section id="skills" class="pt-20 scroll-mt-2 text-center">
    <h2 class="text-3xl font-bold text-cyan-400 mb-12">[ SKILLS ]</h2>
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
