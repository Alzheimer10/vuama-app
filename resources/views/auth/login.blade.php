@extends('layouts.base')
@section('title','Login')
@section('content')
<div class="container" ng-controller="loginCtrl">
    <div class="row">
        <div class="content-center">
            <div class="logo">
                <img class="img-responsive" src="images/logo-white.svg"></img>
            </div>
            <div>
                    <form class="form-horizontal" name="form" role="form" method="POST" action="{{ url('/login') }}" novalidate>
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('login') ? 'error' : '' }}">
                            <div class="col-xs-12">
                                <i class="fa fa-fw fa-user left"></i>
                                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}" placeholder="su@correo.com" autofocus>
                                {{--
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                --}}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' error' : '' }}">
                            <div class="col-xs-12">
                                <i class="fa fa-fw fa-key left"></i>
                                <i class="fa fa-fw @{{ view?'fa-low-vision':'fa-eye'}} right" ng-click="togglePass()" uib-tooltip="@{{view?'Ocultar contraseña':'Mostrar contraseña'}}"></i>
                                <input id="password" type="@{{view?'text':'password'}}" class="form-control" name="password" placeholder="clave" autocomplete="off">
                                {{--
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                --}}
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="checkbox pull-left">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}">
                                        Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary send">Ingresar <i class="fa fa-unlock"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
