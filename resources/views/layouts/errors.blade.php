<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <!-- disable iPhone inital scale -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{config('bluebox.name')}} | @yield('title')</title>
    <META NAME="description" CONTENT="ECOMMERCE">
    <meta name="classification" content="ECOMMERCE" />
    <meta name="copyright" content="ICON" />
    <meta name="author" content="Ocean DevGroup"  />
    <link rel="author" content="Ocean DevGroup" title="Ocean Development Group" href="https://www.oceandg.com">
    <meta http-equiv="refresh" content="5; url={{url('/')}}" />
    <link rel="icon" href="/favicon.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"/>
    <!--  MAIN CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css" />
    {{--Bower Local
         <link rel="stylesheet" type="text/css" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
         --}}
    <link href="{!! asset('css/errors.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body style="background-color: #0a4e99!important;">
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
    <footer>&copy; 2016 All rights reserved to Ocean DevGroup</footer>
</body>
</html>
