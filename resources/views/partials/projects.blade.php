{{-- PROJECTS --}}
<section id="projects" class="pt-20 scroll-mt-2 px-4">
    <div class="text-center">
        <h2 class="text-3xl font-bold text-cyan-400 mb-12 border-cyan-500 inline-block">[ PROJECTS ]</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ([
            ['title' => 'Website Pemesanan Tiket Acara', 'image' => 'project1.png', 'link' => 'https://github.com/agungbudisan/PPL-A_sistem_pemesanan_dan_pengelolaan_tiket_Event4U'],
            ['title' => 'Refind | Recycle Inspiration', 'image' => 'project2.png', 'link' => 'https://github.com/capstonec242ps168'],
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
