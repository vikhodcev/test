<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/bootstrap.min.css"/>
        <title>{{ isset($title) ? $title : '' }}</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div> 
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    </body>
</html>