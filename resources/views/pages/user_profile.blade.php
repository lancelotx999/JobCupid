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
        <nav class="navbar navbar-default" style="background-color:#e5f2ef;">
            <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                    <a class="navbar-brand glyphicon glyphicon-chevron-left" href="#">Back</a>
              </div>
                <div class="nav navbar-nav navbar-right" >
                    <a class="navbar-brand" href="#" style="position: fixed; right: 0;top:8px">Done</a>
              </div>
              
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container-fluid">
    <div class="row row-xs-5">
        <div class="col-md-6 col-md-offset-5">
            <h3>Job Title</h3>
            <h3>Job Description</h3>
        </div>
    </div>
    <div class="row row-xs-5 panel panel-footer text-center navbar-fixed-bottom" style="background-color:#e5f2ef;">
         <div class="row">
            <div style="font-family:Segoe UI Semilight;font-size:30px;">StartUP, Kuching</div>
        </div>
        <div class="row" style="font-family:Segoe UI Light;font-size:20px;">
           <div class="col-xs-4 col-sm-4"></div>
           <div class="col-xs-10 col-sm-4">
               <ul>
                  <li>Name: {{$user->name}}</li>
                  <li>Age: {{$user->age}}</li>
                  <li>Time Available: {{$user->time_available}}</li>
                  <li>Preferred Field: {{$user->preferred_field}}</li>
                  <li>Skills: {{$user->skills}}</</li>
                  <li>Description: {{$user->desc}}</</li>
               </ul>
           </div>
           <div class="clearfix visible-xs-block"></div>
           <div class="col-xs-4 col-sm-4"></div>
        </div>
         <div class="row">
            <button type="submit" class="btn btn-circle btn-lg  btn-primary">Log Out</button>
         </div>
    </div>
    
  </div>
@endsection
