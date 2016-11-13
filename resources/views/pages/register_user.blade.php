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
                
                <a class="navbar-brand glyphicon glyphicon-chevron-left" href="#">Back</a>
              </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
  <div class="container-fluid text-center">
    <div class="row">
       <h1>LOGO </h1>
             <!--<img src="{{ asset('/image/logo.png') }}" class="img-responsive img-circle" alt="Responsive image"> -->
             <form>
                <div class="form-group">
                    <label for="name" style=" text-align: left;">Name</label>
                    <input type="name" class="form-control" id="name" placeholder="name">
                </div> 
                <div class="form-group">
                    <label for="Email" style=" text-align: left;">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Password" style=" text-align: left;">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Age" style=" text-align: left;">Age</label>
                    <input type="age" class="form-control" id="age" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="Time Available" style=" text-align: left;">Time Available</label>
                    <input type="time" class="form-control" id="age" placeholder="time">
                </div>
                <div class="form-group">
                    <label for="Prefer Field" style=" text-align: left;">Prefer Field</label>
                    <input type="prefer_field" class="form-control" id="prefer_field" placeholder="prefer_field">
                </div>
                <div class="form-group">
                    <label for="Skills" style=" text-align: left;">Skills</label>
                    <input type="skills" class="form-control" id="skills" placeholder="skills">
                </div>

                <div class="form-group">
                    <label for="Description" style=" text-align: left;">Description</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="Profile Image" style=" text-align: left;">Profile Image</label>
                    <input type="file" id="exampleInputFile">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> 
    </div>
  
  </div>
@endsection