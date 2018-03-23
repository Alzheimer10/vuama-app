@extends('layouts.layout')
    @section('title','Permissions')
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
                        <form method="post" id="form" action="{{url('permissions')}}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-4 offset-md-4 text-center">
                                    <label for="admin">Roles</label>   
                                    <input id="admin" data-url="{{url('search/role')}}" data-second="{{url('search/permissions')}}" type="text" class="form-control ">
                                    <input type="text" hidden name="id" value="" id="id" >
                                </div>   
                            </div>   
                            <div class="row mt-2">
                                <div class="col-md-4 offset-md-4" id="data">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3 mx-auto text-center">
                                    <input type="submit" value="Asignar" class="btn btn-md btn-vuama">  
                                </div>
                            </div>
                        </form>    
                    </div>        
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        <script src="{{asset('js/AdminSearch.js')}}"></script>
    @endsection
