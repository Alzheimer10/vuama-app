@extends('layouts.base')
@section('title','Recuperar contraseña')
@section('content')
<div class="container">
    <div class="row">
        <div class="content-center">
            <div class="logo">
                <img src="{{asset('images/logo-white.svg')}}"></img>
            </div>
            <div>
                <h4><i class="fa fa-fw fa-key"></i> Recuperar contraseña</h4>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' error' : '' }}">
                            <div class="col-xs-12">
                                <i class="fa fa-fw fa-envelope-o left"></i>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo" autocomplete="off" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary send">Recuperar contraseña <i class="fa fa-fw fa-send-o"></i></button>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            - o -
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <a href="{{ url('/login') }}" class="btn btn-link">Ingresar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
