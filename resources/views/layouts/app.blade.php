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
            <v-app-bar app>
                <v-toolbar-title>
                    <a href="/" style="text-decoration: none;" class="primary--text">
                        Dashboard vuetify
                    </a>
                </v-toolbar-title>

                <v-spacer></v-spacer>

                <!-- Authentication Links -->
                @guest
                @if (!\Request::is('passwordapi/*') && !\Request::is('success'))
                    <v-btn href="{{ route('login') }}" color="primary" text class="mr-0">
                        Iniciar sesión<v-icon>mdi-login</v-icon>
                    </v-btn>
                @endif
                @else
                    <v-btn href="{{ route('dashboard') }}" color="primary" text class="mr-0">
                        Dashboard<v-icon>mdi-view-dashboard</v-icon>
                    </v-btn>
                @endguest
            </v-app-bar>

            <v-main>
                @yield('content')
            </v-main>

            {{-- <v-footer app>
                <!-- -->
            </v-footer> --}}
        </v-app>
    </div>
</body>
</html>
