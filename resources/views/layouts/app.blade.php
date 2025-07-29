<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cyber Dev</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    @yield('content')
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
