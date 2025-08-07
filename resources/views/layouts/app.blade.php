<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title>Alvito Fahriel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased scroll-smooth">
    @yield('content')
    <div id="particles-js" class="fixed inset-0 z-0 pointer-events-none"></div>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
            "number": { "value": 360, "density": { "enable": true, "value_area": 1000 } },
            "color": { "value": "#00ffff" },
            "shape": { "type": "circle" },
            "opacity": { "value": 0.2, "random": true },
            "size": { "value": 1.0, "random": true },
            "line_linked": {
                "enable": true,
                "distance": 120,
                "color": "#00ffff",
                "opacity": 0.2,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false
            }
            },
            "interactivity": {
            "events": {
                "onhover": { "enable": true, "mode": "repulse" },
                "onclick": { "enable": false },
                "resize": true
            }
            },
            "retina_detect": true
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.2/dist/vanilla-tilt.min.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".tilt-icon"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 0.4,
            scale: 1.1,
        });

    </script>

    @if(session('success'))
        <div id="toast-success" class="fixed bottom-5 right-5 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50 animate-fade-in">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast-success');
                if (toast) {
                    toast.remove();
                }
            }, 3000); // hilang setelah 3 detik
        </script>

        <style>
            @keyframes fade-in {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            .animate-fade-in {
                animation: fade-in 0.3s ease-out;
            }
        </style>
    @endif
</body>
</html>
