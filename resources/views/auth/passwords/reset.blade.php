@extends('layouts.base')
@section('title','Reiniciar contraseña')
@section('content')
<div class="container">
    <div class="row">
        <div class="content-center">
            <div class="logo">
                <img src="{{asset('images/logo-white.svg')}}"></img>
            </div>
            <div>
                <h4><i class="fa fa-fw fa-key"></i> Reiniciar contraseña</h4>
                <div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <i class="fa fa-fw fa-envelope-o left"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fa fa-fw fa-key left"></i>
                            <div class="col-xs-12">
                                <input id="password" type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <i class="fa fa-fw fa-lock left"></i>
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary send">Reiniciar <i class="fa fa-fw fa-send"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
