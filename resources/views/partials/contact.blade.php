{{-- CONTACT --}}
<section id="contact" class="pt-20 scroll-mt-2 mb-12 px-4">
    <h2 class="text-3xl font-bold text-cyan-400 mb-10 border-cyan-500 inline-block text-center w-full">
        [ CONTACT ]
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4 bg-black/30 border border-cyan-500 rounded p-6">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required
                class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500">
            <input type="email" name="email" placeholder="Your Email" required
                class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500">
            <textarea name="message" rows="4" placeholder="Your Message" required
                class="w-full px-4 py-2 bg-black text-white border border-cyan-400 rounded focus:outline-none focus:ring-2 focus:ring-cyan-500"></textarea>
            <button type="submit"
                class="w-full sm:w-auto block text-center bg-cyan-400 text-black px-6 py-2 rounded hover:bg-cyan-300 transition-all duration-200">>> SEND MESSAGE</button>
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
