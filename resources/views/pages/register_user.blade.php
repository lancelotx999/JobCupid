@extends('layouts.master')

@section('titleTag')
    Jobcupid Register
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
                
                <a class="navbar-brand glyphicon glyphicon-chevron-left" href="/">Back</a>
              </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
  <div class="container-fluid text-center">
    <div class="row">
        <div class="col-xs-2 col-sm-4"></div>
        <div class="col-xs-10 col-sm-4">
            <!-- <h1>LOGO </h1> -->
             <img src="{{ asset('/image/logo.png') }}" class="logo img-responsive img-circle" alt="Responsive image"> <br />
             <form method="POST" action="{{ url('/user/') }}">
             {{ csrf_field() }}
                <div class="form-group" style=" text-align: left;">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" name="name" id="name" placeholder="Name">
                </div> 
                <div class="form-group" style=" text-align: left;">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Age">Age</label>
                    <input type="age" class="form-control" name="age" id="age" placeholder="Age">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Time Available">Time Available</label>
                    <input type="time" class="form-control" name="time" id="time" placeholder="time">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Prefer Field">Preferred Field</label>
                    <input type="prefer_field" class="form-control" name="field" id="prefer_field" placeholder="prefer_field">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Skills">Skills</label>
                    <input type="skills" class="form-control" name="skills" id="skills" placeholder="skills">
                </div>

                <div class="form-group" style=" text-align: left;">
                    <label for="Description">Description</label>
                    <textarea class="form-control" name="desc" rows="3"></textarea>
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Profile Image">Profile Image</label>
                    <input type="file" name="pic" id="exampleInputFile">
                </div>
                <button type="submit" class="btn btn-default btn-primary" style=" text-align: left;">Submit</button>
            </form> 
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-2 col-sm-4"></div>
    </div>
  
  </div>
@endsection