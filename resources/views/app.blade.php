<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Gamerz.NET</title>
    <meta name="description" content="Gamerz.NET">
    <meta name="author" content="Gamerz.NET">
    <link rel="shortcut icon" href="{{ asset('img/favico.png') }}" type="image/x-icon" />

    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/bootstrap.css') !!}
    @yield('styles')


    <!--[if lt IE 9]>
    {!! Html::script('//html5shiv.googlecode.com/svn/trunk/html5.js') !!}
    <![endif]-->
    @yield('scripts')

</head>
@include('header')
<body>
@yield('body')
</body>
</html>