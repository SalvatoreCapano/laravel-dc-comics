<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page_title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <div id="app">

        @include('partials.header')

        <main>
            <div class="heroSection"></div>
            <section>
                <section class="contentSection">
                    <div class="container">
                        @yield('content')
                    </div>
                </section>
            </section>
        </main>

        @include('partials.footer')

    </div> <!-- /app -->

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    @yield('js')

</body>

</html>
