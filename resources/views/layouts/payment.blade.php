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
    <link rel="icon" href="/favicon.png">

    <title>{{config('bluebox.name')}}  | @yield('title')</title>
    
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/base.css') }}" type="text/css" />

    <style>
        .spinner {
          margin: 100px auto;
          width: 50px;
          height: 40px;
          text-align: center;
          font-size: 10px;
          color: #000;
        }

        .spinner > div {
          background-color: #fff;
          height: 100%;
          width: 6px;
          display: inline-block;
          
          -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
          animation: sk-stretchdelay 1.2s infinite ease-in-out;
        }

        .spinner .rect2 {
          -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s;
        }

        .spinner .rect3 {
          -webkit-animation-delay: -1.0s;
          animation-delay: -1.0s;
        }

        .spinner .rect4 {
          -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s;
        }

        .spinner .rect5 {
          -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-stretchdelay {
          0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
          20% { -webkit-transform: scaleY(1.0) }
        }

        @keyframes sk-stretchdelay {
          0%, 40%, 100% { 
            transform: scaleY(0.4);
            -webkit-transform: scaleY(0.4);
          }  20% { 
            transform: scaleY(1.0);
            -webkit-transform: scaleY(1.0);
          }
        }
    </style>
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
<body>
    <div class="container-fluid" id="wrapper">
        <div class="row">
            <div class="contents">
              <div class="col-xs-12 text-center">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <h4 style="color: #fff;"><i class="fa fa-info-circle"></i>&nbsp;Procesando pago</h4>
              </div>
                @yield('content')
            </div>
        </div>        
    </div>
    <footer class="footer">
        2017 &copy Ocean DevGroup
    </footer>
    
    <!-- Scripts -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    @yield('scripts')
</body>
</html>