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
                    <a  
                        class="navbar-brand glyphicon glyphicon-chevron-left" 
                        href="/" 
                        style="color: #fff; cursor: pointer;"
                    ></a>
                    <div class="navbar-brand" style="color: #fff;">
                        Employer Registration
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection

@section('content_page')
<div class="container-fluid text-center">
    <div class="row">
        <img 
            src="{{ asset('/image/logo.png') }}" 
            class="img-responsive img-circle" 
            alt="Responsive image" 
            style="width: 50%; margin: 0 auto;"
        > 
        
        <br />
            
        <form method="POST" action="{{ url('/employer/') }}">
            {{ csrf_field() }}
            <div class="form-group" style="text-align: left;">
                <label for="companyName">
                    Company Name
                </label>
                <input 
                    type="companyName" 
                    class="form-control" 
                    name="name" 
                    id="name" 
                    placeholder="Your company's name"
                >
            </div> 
            <div class="form-group" style=" text-align: left;">
                <label for="Email">
                    Email
                </label>
                <input 
                    type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
            </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Password">
                        Password

                    </label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Sector" >
                        Sector

                    </label>
                    <input type="sector" class="form-control" name="sector" id="sector" placeholder="Sector">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Website" >
                        Website

                    </label>
                    <input type="website" class="form-control" name="website" id="website" placeholder="Company's official website">
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Description" >
                        Description

                    </label>
                    <textarea class="form-control" name="desc" rows="3" placeholder="What does your company do?"></textarea>
                </div>
                <div class="form-group" style=" text-align: left;">
                    <label for="Profile Image" >
                        Profile Image

                    </label>
                    <input type="file" name="pic" id="exampleInputFile">
                </div>
                <button type="submit" class="btn btn-default btn-primary" style=" width: 90%; padding: 2%; margin-bottom: 3%;">Submit</button>
            </form> 
    </div>
  
  </div>
@endsection