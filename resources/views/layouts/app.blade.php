<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Se connecter - MIC</title>

    @include('components.css')

</head>
<body>

    @include('components.nav')

    <div id="app">
        <main>
            <section class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12">
            @yield('content')
                    </div>
                </div>
            </section>
        </main>
    </div>
    @include('components.js')
</body>
</html>
