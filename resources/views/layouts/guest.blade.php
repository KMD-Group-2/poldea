<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Polling website for university departments">
    <meta name="author" content="group2">

    <link rel="icon" href="/assets/favicon.png" type="image/png" />

    <link rel="stylesheet" href="/css/login.css" />
    <link rel="stylesheet" href="/css/style.min.css" />

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body>

    @include('common/loading-screen')

    <section id="wrapper">
        {{ $slot }}
    </section>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
    </script>

</body>

</html>
