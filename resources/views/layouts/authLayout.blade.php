<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        <link rel="icon" href="/logo.png" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        
      

       
    </head>
    <body>
        {{-- @include('components.navbar') --}}
        @yield('main')

        <script>
          const myAlert = document.querySelector('#myAlert')
          setTimeout(() => {
            myAlert.classList.add('hidden')
          }, 3000);
        </script>
    </body>
</html>
