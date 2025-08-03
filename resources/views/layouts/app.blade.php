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
</body>

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

</html>
