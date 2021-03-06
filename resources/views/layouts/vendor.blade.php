<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor-Panel</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom_admin.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Main Navigation -->
    <header>
        @include('layouts.inc.vendor-navbar')
        @include('layouts.inc.vendor-sidebar')
    </header>
   <!--Main Navigation-->

    <main>
        <br>
        <div class="container">
            @yield('content')
        </div>

    </main>
</body>
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
