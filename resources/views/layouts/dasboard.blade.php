<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>{{ $title }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    @vite('resources/css/app.css')
    <!-- Main Styling -->
    <link href="/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body class="m-0 font-sans text-base antialiased font-normal min-h-screen  text-slate-500">
    {{-- <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div> --}}
    <!-- sidenav  -->
    @include('components.dashboard-sidebar')

    <!-- end sidenav -->

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-64 ">
        <!-- Navbar -->
        @include('components.dashboard-navbar')

        <!-- end Navbar -->
        @yield('dashboard')
        <!-- end cards -->
    </main>

    <script>
        const sideNav = document.querySelector('#sideNav')
        const myFunction = () => {
            sideNav.classList.toggle('-translate-x-full')
        }
    </script>
    <script src="/js/plugins/perfect-scrollbar.min.js" async></script>
    <script src="/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</body>


</html>
