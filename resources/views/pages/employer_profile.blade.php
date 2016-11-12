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
                <div class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="#" style="position: fixed; right: 0;top:8px">Done</a>
              </div>
              
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container-fluid">
    <div class="row row-xs-5">
        <div class="col-md-2 col-md-offset-5">
            <h3>Profile Image</h3>
        </div>
    </div>
    <div class="row row-xs-5 panel panel-footer text-center navbar-fixed-bottom" style="background-color:#e5f2ef;">
        <div class="row">
            <div style="font-family:Segoe UI Semilight;font-size:30px;">James, 18</div>
        </div>
        <div class="row" style="font-family:Segoe UI Light;font-size:20px;">
           <div class="col-xs-4 col-sm-4"></div>
           <div class="col-xs-10 col-sm-4">
               <ul>
                   <li>Past Qualification 1</li>
                   <li>Past Qualification 2</li>
                   <li>Past Qualification 3</li>
                   <li>Available from 12.00p.m.-3.00p.m.</li>
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
