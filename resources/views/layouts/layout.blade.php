<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta base="/">
    <meta name="description" content="Bluecommerce"/>
    <meta name="author" content="Ocean DevGroup"/>
    <link rel="icon" href="/favicon.png"/>
    <title>Vuama | @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('EasyAutoComplete/easy-autocomplete.min.css')}}"> 

    <link rel="stylesheet" href="{{asset('EasyAutoComplete/easy-autocomplete.themes.min.css')}}"> 
    @yield('css')
   

</head>
<body>
    <div class="container-fluid" id="subcontent">
        <div class="contents">
            <section class="section-content">
                @yield('content')
            </section>
        </div>
    </div>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('EasyAutoComplete/jquery.easy-autocomplete.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
