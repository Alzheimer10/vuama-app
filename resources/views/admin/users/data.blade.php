@extends('layouts.layout')
    @section('title','Admins Data')
    @section('css')
        <link rel='stylesheet' href="{{ asset('css/admin.css')}}">
    @endsection
    @section('content')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="jumbotron">
                        <div class="error text-center" >
                            <p><b></b></p>
                        </div>
                        <div class="success text-center" >
                            <p><b></b></p>
                        </div>
                        <form method="post" id="form" action="{{url('admins')}}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4 offset-md-4 text-center">
                                    <label for="admin">Nombre y/o Apellido:</label>   
                                    <input id="admin" data-url="{{url('search/admins')}}" class="not" type="text" class="form-control ">
                                    <input type="text" hidden name="id" class="not" value="" id="id" >
                                </div>   
                            </div>  
                            <div class="row mt-2">
                                <div class="col-md-4 offset-md-2 text-center">
                                    <label for="name">Nombre:</label>   
                                    <input id="name" name="name" type="text" class="form-control ">
                                </div>
                                <div class="col-md-4  text-center">
                                    <label for="lname">Apellido:</label>   
                                    <input id="lname" name="lname" type="text" class="form-control ">
                                </div> 
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-4 offset-md-2 text-center">
                                    <label for="email">Correo:</label>   
                                    <input id="email" name="email" type="email" class="form-control ">
                                </div>
                                <div class="col-md-4  text-center">
                                    <label for="username">Username:</label>   
                                    <input id="username" name="username" type="text" class="form-control ">
                                </div> 
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-4 offset-md-5">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="on"  name="reset" id="check">
                                        <label class="form-check-label" for="check">Resetear Contraseña</label>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-2 mt-3 offset-md-4">
                                    <input type="submit" value="Guardar" class="btn btn-md btn-vuama">  
                                </div>
                                <div class="col-md-2 mt-3">
                                    <a class="btn btn-success">Ver Perfil</a>
                                </div>
                            </div>
                        </form>    
                    </div>        
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script src="{{asset('js/AdminData.js')}}"></script>
    @endsection
