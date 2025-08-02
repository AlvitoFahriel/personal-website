<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title>Alvito Fahriel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased scroll-smooth">
    @yield('content')
    <div id="mouse-bg" class="fixed inset-0 z-0 pointer-events-none"></div>

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


    const bg = document.getElementById("mouse-bg");
    document.addEventListener("mousemove", (e) => {
        const x = e.clientX / window.innerWidth * 100;
        const y = e.clientY / window.innerHeight * 100;
        bg.style.background = `radial-gradient(circle at ${x}% ${y}%, rgba(0, 255, 255, 0.08), transparent 50%)`;
    });
</script>

</html>
