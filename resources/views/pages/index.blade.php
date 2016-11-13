@extends('layouts.fullscreen')

@section('titleTag')
    Jobcupid Register
@endsection

@section('keywordsTag')
    part time, job, free
@endsection

@section('descriptionTag')
    Jobcupid, your part time helper 
@endsection

@section('content_page')
  <div class="container-fluid text-center">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
           <!--  <h1>LOGO</h1> -->
            <img src="{{ asset('/image/logo.png') }}" class="img-responsive img-circle" alt="Responsive image"> 
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-5">
                <div class="panel panel-default">
                <div class="panel-title icon-register">
                    <a href="\register\user" class="glyphicon glyphicon-pawn"></a>
                </div>
                <div class="panel-body">
                    Job Seeker
                    <h6 class="text-capitalize">I need a job</h6>
                </div>
                
                </div>
                
            </div>

            <div class="col-xs-2">          
            </div>

           <div class="col-xs-5">
                <div class="panel panel-default">
                <div class="panel-title icon-register">
                    <a href="\register\employer" class="glyphicon glyphicon-king"></a>
                    </div>
                    <div class="panel-body">
                    Job Provider
                    <h6 class="text-capitalize">I need a worker</h6>
                    </div>
                </div>
                
            </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <p>Already have a account?</p>
            <a class="btn btn-circle btn-primary" href='/login'>Login</a>
        </div>
    </div>
    </div>
  </div>
@endsection