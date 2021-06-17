<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <v-app>
            <v-container fluid class="d-flex align-center wrap-auth" style="background-image: url({{ asset('/images/bg-common.jpg') }});">
                <v-main>
                    @yield('content')
                </v-main>
                <floating-btn></floating-btn>
                {{-- <v-fab-transition>
                    <v-btn
                        color="primary"
                        fab
                        large
                        dark
                        top
                        left
                        absolute
                        style="top:15px"
                        href="/"
                    >
                        <v-icon>mdi-arrow-left</v-icon>
                    </v-btn>
                </v-fab-transition> --}}
            </v-container>
        </v-app>
    </div>
</body>
</html>
