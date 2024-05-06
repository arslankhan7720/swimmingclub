<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NorthWest Swim Club</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css','resources/js/app.js'])

        <style>
            body{
                background: #e5e7eb;
            }
.overlay-slider {


    background: #00000070;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 999;
}

div#default-carousel > button,
div#default-carousel .dots{
    z-index: 999;
}
div#default-carousel {
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5); /* Add shadow */
}

nav.bg-lightskyblue{
    background: #87cefa82;
}

        </style>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">






        @include('home.navbar')
        @include('home.slider')
        @include('home.access')
        @include('home.events2')
        @include('home.facility')
        @include('home.footer')




    </body>


</html>
