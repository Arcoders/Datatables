<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{ Html::style('css/app.css') }}

    @stack('stylesheets')

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token()
        ]); ?>
    </script>

</head>
<body>

<div id="app">
    <div class="container">@yield('content')</div>
</div>

<script src="/js/app.js"></script>

@stack('scripts')

</body>
</html>