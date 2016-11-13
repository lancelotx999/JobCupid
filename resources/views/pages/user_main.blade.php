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
                    <a class="navbar-brand glyphicon glyphicon-user" href="/user/profile"></a>
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
  
    <div id="carousel-jobCupid-generic" class="carousel slide" data-ride="carousel" style="background-color:#ffffff;">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <div class="row row-xs-5">
           <div class="col-md-4"></div>
        <div class="col-md-4 panel panel-default text-center" style="min-height:250px;">
             <h3>Job Title</h3>
            <h3>Job description</h3>
        </div>
        <div class="col-md-4"></div>
        </div>
         <div class="row row-xs-5 text-center" style="min-height:250px">
            <div class="col-md-4"></div>
            <div class="col-md-4 panel panel-default text-center" style="background-color:#e5f2ef;">
            <div class="row">
                <div style="font-family:Segoe UI Semilight;font-size:30px;">StartUP, Kuching</div>
            </div>
            <div class="row">
                <div style="font-family:Segoe UI Light;font-size:20px;">
                      <ul>
                        <li>email@email.com</li>
                        <li>012xxxxxxx</li>
                        <li>Status</li>
                      </ul>
                </div>
            </div>
         </div>
            <div class="col-md-4"></div>
         </div>

      </div>

      <div class="item">
        <div class="row row-xs-5">
           <div class="col-md-4"></div>
        <div class="col-md-4 panel panel-default text-center" style="min-height:250px;">
            <h3>Job Title</h3>
            <h3>Job description</h3>
        </div>
        <div class="col-md-4"></div>
        </div>
        <div class="row row-xs-5 text-center" style="min-height:250px">
            <div class="col-md-4"></div>
         <div class="col-md-4 panel panel-default text-center" style="background-color:#e5f2ef;">
            <div class="row">
                <div style="font-family:Segoe UI Semilight;font-size:30px;">James, 18</div>
            </div>
            <div class="row">
                <div style="font-family:Segoe UI Light;font-size:20px;">
                      <ul>
                        <li>Past Qualification 1</li>
                        <li>Past Qualification 2</li>
                        <li>Past Qualification 3</li>
                        <li>Available from 12.00p.m.-3.00p.m.</li>
                      </ul>
                </div>
            </div>
         </div>
      </div>
   
    </div>
    
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-jobCupid-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-jobCupid-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
<div class="row text-center panel panel-footer navbar-fixed-bottom" style="background-color:#e5f2ef;">
           <button type="submit" class="glyphicon glyphicon-remove btn btn-circle btn-primary"></button>
            <a href="/boost" type="submit" class="glyphicon glyphicon-flash btn btn-circle btn-primary"></a>
            <button type="submit" class="glyphicon glyphicon-ok btn btn-circle btn-primary"></button>
    </div>
<script>
    $(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
</script>
@endsection