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
                    <a class="navbar-brand glyphicon glyphicon-user" href="/emp/profile"></a>
              </div>
                <div class="nav navbar-nav navbar-right">
                    <a class="navbar-brand glyphicon glyphicon-briefcase" href="/chat" style="position: fixed; right: 0;top:8px"></a>
              </div>
              
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container-fluid">
     <div class="row row-xs-5" >
        <div class="col-md-4"></div>
        <div class="col-md-4 panel panel-default text-center" style="min-height:250px;">
            <h3>Employer Profile Image</h3>
        </div>
        <div class="col-md-4"></div>
     </div>
     <div class="row row-xs-5 text-center" >
         <div class="col-md-4"></div>
         <div class="col-md-4 panel panel-default text-center" style="background-color:#e5f2ef;">
            <div class="row">
                <div style="font-family:Segoe UI Light;font-size:20px;">
                      <ul>
                        <li>{{$current_user->name}}</li>
                        <li>{{$current_user->desc}}</li>
                        <li>{{$current_user->sector}}</li>
                        <li>{{$current_user->website}}</li>
                      </ul>
                </div>
            </div>
         </div>
      </div>
       <div class="col-md-6 col-md-offset-5">
            <button type="submit" class="glyphicon glyphicon-remove btn btn-circle btn-primary"></button>
            <a href="/boost" type="submit" class="glyphicon glyphicon-flash btn btn-circle btn-primary"></a>
            <button type="submit" class="glyphicon glyphicon-ok btn btn-circle btn-primary"></button>
        </div>
    </div>

@endsection
