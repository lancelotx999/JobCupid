@extends('layouts.master')

@section('titleTag')
    Jobcupid Login
@endsection

@section('keywordsTag')
    part time, job, free
@endsection

@section('descriptionTag')
    Jobcupid, your part time helper 
@endsection

@section('header')
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                    <a class="navbar-brand glyphicon glyphicon-user" href="/employee" style="color: #fff"></a>
              </div>

              <div class="navbar-brand" style="position: absolute; left: 38%; top: 2%; color: #fff"">Profile</div>

                <div class="nav navbar-nav navbar-right">
                    <a class="navbar-brand glyphicon glyphicon-briefcase" href="/chat" style="position: absolute; right: 0;top:1%; color: #fff"></a>
              </div>
              
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container-fluid">
     <div class="row row-xs-5" >
        <div class="col-md-4"></div>
        <div class="col-md-4 panel panel-default text-center" style="min-height: 100px">
            <h3>Employee Pic</h3>
        </div>
        <div class="col-md-4"></div>
     </div>
     <div class="row row-xs-5 text-center" >
         <div class="col-md-4"></div>
         <div class="col-md-4 panel panel-default text-center" style="background-color:#e5f2ef;">
            <div class="row">
                <div style="font-family:Segoe UI Semilight;font-size:2em;">{{$user->name}}, {{$user->age}}</div>
            </div>
            <div class="row">
                <div style="font-family:Segoe UI Light;font-size:1.25em; text-align: left;">
                     <ul>
                        <li>Time Available: {{$user->time_available}}</li>
                        <li>Preferred Field: {{$user->preferred_field}}</li>
                        <li>Skills: {{$user->skills}}</li>
                        <li>Description: {{$user->desc}}</li>
                     </ul>
                </div>
            </div>
         </div>
      </div>
    </div>
@endsection

@section('footer')
    <div class="text-center footer navbar-fixed-bottom" style="padding: 3%;">
        <a href="/login" class="btn btn-circle btn-lg  btn-primary">Log Out</a>
@endsection

