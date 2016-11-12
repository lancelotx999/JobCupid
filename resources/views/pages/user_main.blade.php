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
    
    <div id="carousel-jobCupid-generic" class="carousel slide" data-ride="carousel" style="background-color:#ffffff;">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <div class="row row-xs-5">
          <div class="col-md-2 col-md-offset-5 text-center" style="min-height:250px">
             <h3>Job Title</h3>
            <h3>Job Description</h3>
          </div>
        </div>
        <div class="row row-xs-5 text-center" style="background-color:#e5f2ef;min-height:250px">
          <div class="row">
            <div style="font-family:Segoe UI Semilight;font-size:30px;">StartUP, Kuching</div>
          </div>
          <div class="row" style="font-family:Segoe UI Light;font-size:20px;">
           <div class="col-xs-4 col-sm-4"></div>
           <div class="col-xs-10 col-sm-4">
               <ul>
                    <li>email@email.com</li>
                   <li>012xxxxxxx</li>
                   <li>Status</li>
                   <li>Sector</li>
                   <li>Website</li>
               </ul>
           </div>
           <div class="clearfix visible-xs-block"></div>
           <div class="col-xs-4 col-sm-4"></div>
        </div>
        </div>
      </div>


      @foreach($jobs as $job)
            <div class="item">
                <div class="row row-xs-5">
                    <div class="col-md-2 col-md-offset-5 text-center" style="min-height:250px;">
                        <p>Job Title: {{$job->title}}</p>
                        <p>Job Description: {{$job->desc}}</p>
                        <p>Job Requirements: {{$job->requirements}}</p>
                        <p>Job Location: {{$job->location}}</p>
                        <p>Job Duration: {{$job->duration}}</p>
                        <!-- <p>Job Start Date: {{$job->start_date}}</p>
                        <p>Job Salary: {{$job->salary}}</p> -->
                    </div>
                </div>
          @foreach($employers as $employer)
            
                <div class="row row-xs-5 text-center" style="background-color:#e5f2ef;min-height:250px">
                        <div class="row">
                            <div style="font-family:Segoe UI Semilight;font-size:30px;">{{$employer->name}}, Kuching</div>
                        </div>
                        <div class="row" style="font-family:Segoe UI Light;font-size:20px;">
                            <div class="col-xs-4 col-sm-4"></div>
                                <div class="col-xs-10 col-sm-4">
                                    <ul>
                                        <li>Description: {{$employer->desc}}</li>
                                        <li>Sector: {{$employer->sector}}</li>
                                        <li>Website: {{$employer->website}}</li>
                                    </ul>
                                </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-xs-4 col-sm-4"></div>
                        </div>
                    </div>
                </div>
          @endforeach
      @endforeach
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
            <button type="submit" class="btn btn-circle btn-lg  btn-primary">Log Out</button>
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