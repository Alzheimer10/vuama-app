<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ecommerce Bluebox 4.0">
    <meta name="author" content="Ocean DevGroup">
    <link rel="icon" href="favicon.png">

    <title>{{config('bluebox.name')}}  | @yield('title')</title>

    <!-- Styles -->{{--bower
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css') }}">--}}
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" />
    
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}" type="text/css" />
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="baseApp">
    <div class="container-fluid" id="wrapper">
        <div class="row">
            <div class="contents">
                @yield('content')
            </div>
        </div>        
    </div>
    <footer class="footer">
        2016 &copy Ocean DevGroup
    </footer>
    
    <!-- Scripts -->{{--
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>--}}
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.min.js"></script>
    @yield('scripts')
    <script src="{{asset('/js/base.js')}}"></script>
    
</body>
</html>
