<!DOCTYPE html>
<html>
<head>
    <title>Eventory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ HTML::style('/css/reset.css') }}
    {{ HTML::style('/css/bootstrap.min.css') }}
    {{ HTML::style('/css/main.css') }}
    {{ HTML::script('js/plugins2.js'); }}
    {{ HTML::script('js/vendor/jquery-2.1.1.min.js'); }}
    
    {{ HTML::style('/js/vendor/modernizr-2.8.3.min.js') }}

</head>
    @yield('body')
</body>
</html>