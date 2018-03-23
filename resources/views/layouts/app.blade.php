<!DOCTYPE html>
<html lang="es" ng-app="ecommerce">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta base="/">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="description" content="Bluecommerce"/>
    <meta name="author" content="Ocean DevGroup"/>
    <link rel="icon" href="/favicon.png"/>
    <title>{{ config('bluebox.name') }}  | @yield('title')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bower_components/sweetalert2/dist/sweetalert2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}"/>
    <!-- link rel="stylesheet" href="{{ asset('bower_components/angular-datatables/dist/css/angular-dataTables.min.css') }}" / -->
    <link rel="stylesheet" href="{{ asset('bower_components/datatables/media/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/ladda/dist/ladda-themeless.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('bower_components/angular-ui-select/dist/select.min.css')}}">
    <link rel='stylesheet' href="{{ asset('bower_components/textAngular/dist/textAngular.css')}}">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('EasyAutoComplete/easy-autocomplete.min.css')}}"> 

    <link rel="stylesheet" href="{{asset('EasyAutoComplete/easy-autocomplete.themes.min.css')}}"> 
    @yield('css')
    <link href="{{asset('/css/app.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}"/>
    <link rel="stylesheet"; href="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.css">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <script src="https://cdn.rawgit.com/zenorocha/clipboard.js/master/dist/clipboard.min.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--
    IE8 support, see AngularJS Internet Explorer Compatibility http://docs.angularjs.org/guide/ie
    For Firefox 3.6, you will also need to include jQuery and ECMAScript 5 shim
    -->
    <!--[if lt IE 9]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.2.0/es5-shim.js"></script>
        <script>
            document.createElement('ui-select');
            document.createElement('ui-select-match');
           document.createElement('ui-select-choices');
        </script>
    <![endif]-->
</head>
<body>
    @include('layouts.partials.topbar')
    <div class="container-fluid" id="subcontent">
        @include('layouts.partials.sidebar')
        <div class="contents">
            <section class="section-content">
                @yield('content')
            </section>
        </div>
    </div>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyA1ZXFhl2OQ5p6fKx6X0onxT3UkwA6F2ZM"></script>
    <!-- Scripts -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-datatables/dist/angular-datatables.min.js') }}"></script>
    <!-- for IE support -->
    <script src="{{ asset('bower_components/es6-promise/es6-promise.min.js') }}"></script>
    <script src="{{ asset('bower_components/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-resource/angular-resource.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-bootstrap-switch/dist/angular-bootstrap-switch.min.js') }}"></script>
    <script src="{{asset('/bower_components/ng-file-upload/ng-file-upload.min.js')}}"></script>
    <script src="{{asset('bower_components/ladda/js/spin.js')}}"></script>
    <script src="{{asset('bower_components/ladda/js/ladda.js')}}"></script>
    <script src="{{asset('/bower_components/angular-ladda/dist/angular-ladda.min.js')}}"></script>
    <script src="{{asset('/bower_components/angular-ui-select/dist/select.min.js')}}"></script>
    <script src="{{asset('/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/bower_components/angular-sanitize/angular-sanitize.js')}}"></script>
    <script src="{{asset('/bower_components/angular-input-masks/angular-input-masks-standalone.min.js')}}"></script>
    <script src="{{asset('bower_components/tinymce/tinymce.js')}}"></script>
    <script src="{{asset('bower_components/angular-ui-tinymce/src/tinymce.js')}}"></script>
    <script src="{{asset('bower_components/ngclipboard/dist/ngclipboard.min.js')}}"></script>
    <script src="{{asset('/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('/bower_components/underscore/underscore-min.js')}}"></script>
    <script src="{{asset('bower_components/textAngular/dist/textAngular-rangy.min.js')}}"></script>
    <script src="{{asset('bower_components/textAngular/dist/textAngular-sanitize.min.js')}}"></script>
    <script src="{{asset('bower_components/textAngular/dist/textAngular.min.js')}}"></script>
    <script src="https://unpkg.com/ng-table@2.0.2/bundles/ng-table.min.js"></script>
    <script src="{{asset('bower_components/ngmap/build/scripts/ng-map.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="{{asset('/app/locale_es-do.js')}}"></script>
    <script src="{{asset('/app/app.js')}}"></script>
    {{-- Factories --}}
    <script src="{{asset('/app/factories/services.js')}}"></script>
    {{-- Filters --}}
    <script src="{{asset('/app/filters/formatDate.js')}}"></script>
    {{-- Directives --}}
    <script src="{{asset('/app/directives/array-length.js')}}"></script>
    <script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="{{asset('EasyAutoComplete/jquery.easy-autocomplete.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
