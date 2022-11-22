<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <style>

.center {
  position: absolute;
  top: 10%;
  left: 13%;
  width: 100%;
  text-align: center;
  font-size: 14px;
}

.left {
  float: left;
}

.w3-button {
  font-size: 12px;
  border-radius: 8px;
}

    </style>

</head>
<body>

       @include('layouts.inc.user-navbar')

       <div id="layoutSidenav">
          @include('layouts.inc.user-sidebar')

          <div id="layoutSidenav_content">
                <main>

                    @yield('content')
                    
                </main>
                @include('layouts.inc.user-footer')
          </div>
       </div>

        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>
</html>