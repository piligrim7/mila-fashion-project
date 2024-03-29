<!DOCTYPE html>
{{-- <html class="dark"> --}}
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="En">
<?php
$header_text = 'Fashion style factory';
$footer_text = '© Lysakov Y. V., 2022';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description"
        content="This is a website of Mila about fashion, fashion design, fashion illustration. There are articles about admission and study at the University of Design.">
    <meta name="author" content="Lysakov Yuriy. E-Mail:piligrim.7@bk.ru">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> --}}
    @Vite('resources/js/app.js')
    @Vite('resources/js/flowbite.js')
	@Vite('resources/js/color_theme.js')
    {{-- <link href="{{ Vite::asset('resources/css/app.css') }}" rel="stylesheet"> --}}
    <script>
        // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

</head>

<body class="bg-white dark:bg-black min-h-screen">
    @include('includes.menu')

    <div class="mt-14">
        @yield('main_content')
    </div>

    {{-- @include('includes.footer') --}}
</body>

</html>
