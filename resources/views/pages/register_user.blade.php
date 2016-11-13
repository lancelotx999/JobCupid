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
            <h1>LOGO </h1>
             <!--<img src="{{ asset('/image/logo.png') }}" class="img-responsive img-circle" alt="Responsive image"> -->
             <form method="POST" action="{{ url('/user/') }}">
             {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" style=" text-align: left;">Name</label>
                    <input type="name" class="form-control" name="name" id="name" placeholder="Name">
                </div> 
                <div class="form-group">
                    <label for="Email" style=" text-align: left;">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Password" style=" text-align: left;">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="Age" style=" text-align: left;">Age</label>
                    <input type="age" class="form-control" name="age" id="age" placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="Time Available" style=" text-align: left;">Time Available</label>
                    <input type="time" class="form-control" name="time" id="time" placeholder="time">
                </div>
                <div class="form-group">
                    <label for="Prefer Field" style=" text-align: left;">Preferred Field</label>
                    <input type="prefer_field" class="form-control" name="field" id="prefer_field" placeholder="prefer_field">
                </div>
                <div class="form-group">
                    <label for="Skills" style=" text-align: left;">Skills</label>
                    <input type="skills" class="form-control" name="skills" id="skills" placeholder="skills">
                </div>

                <div class="form-group">
                    <label for="Description" style=" text-align: left;">Description</label>
                    <textarea class="form-control" name="desc" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="Profile Image" style=" text-align: left;">Profile Image</label>
                    <input type="file" name="pic" id="exampleInputFile">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> 
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-2 col-sm-4"></div>
    </div>
  
  </div>
@endsection