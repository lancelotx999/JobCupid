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
        <div class="col-xs-6 col-sm-4"></div>
        <div class="col-xs-6 col-sm-4">
            <h1>LOGO</h1>
            <!--<img src="{{ asset('/image/logo.png') }}" class="img-responsive img-circle" alt="Responsive image"> -->
        </div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs-block"></div>
        <div class="col-xs-6 col-sm-4"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-5">
                <div class="panel panel-default">
                <div class="panel-title">
                    <a href="\register\user">Icon For Job Seeker</a>
                </div>
                <div class="panel-body" style="min-height:300px;bottom:0;">
                    Job Seeker
                </div>
                </div>
                <h3 class="text-capitalize" style="text-transform:uppercase;">I need a job</h3>
            </div>

            <div class="col-xs-2">          
            </div>

           <div class="col-xs-5">
                <div class="panel panel-default">
                <div class="panel-title">
                    <a href="\register\employer">Icon For Job Provider</a>
                </div>
                <div class="panel-body" style="min-height:300px;bottom:0;">
                    Job Provider
                </div>
                </div>
                <h3 class="text-capitalize" style="text-transform:uppercase;">I need a worker</h3>
            </div>
    </div>
    <div class="row">
        <div style="padding:10px;">Already have a account?<a href='/login'>Login</a></div>
    </div>
    </div>
  </div>
@endsection