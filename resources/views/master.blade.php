<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title', 'Currency Exchanger')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/currency.css" rel="stylesheet">
    @stack('head')
</head>

<body>

<div class="bg-page">
    @include ('modules.menu')
    <div class="container top-padding-150 ">
        @if(session('alert'))
            <div class="alert alert-info">{{ session('alert') }}</div>
        @endif

        @yield('content')

    </div>


</div>



<footer class="mastfoot mt-auto footer-padding text-center">
    <div class="inner footer-padding">
        <hr class="mb-4">
        <p>&copy; {{ date('Y') }} <a href="https://p4.diddydear.com/">Currency Exchanger</a></p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>

@stack('body')

</body>
</html>
