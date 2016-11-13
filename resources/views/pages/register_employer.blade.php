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
                    <label for="companyName" style=" text-align: left;">Company Name</label>
                    <input type="companyName" class="form-control" id="company_name" placeholder="Password">
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
                    <label for="Sector" style=" text-align: left;">Sector</label>
                    <input type="sector" class="form-control" id="sector" placeholder="sector">
                </div>
                <div class="form-group">
                    <label for="Website" style=" text-align: left;">Website</label>
                    <input type="website" class="form-control" id="website" placeholder="website">
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