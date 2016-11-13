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
        <nav class="navbar navbar-default">
          <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a  
                class="navbar-brand glyphicon glyphicon-chevron-left"
                onclick="goBack()"
                style="color: #fff; cursor: pointer;"
              ></a>
              </div>

              <div class="navbar-brand" style="position: absolute; left: 33%; top: 2%; color: #fff"">Job Listing</div>

              <div class="nav navbar-nav navbar-right">
                    <a class="navbar-brand glyphicon glyphicon-filter" href="/filter" style="position: absolute; right: 0;top:1%; color: #fff"></a>
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
                    <div class="col-md-2 col-md-offset-5 text-center" style="min-height:200px;">
                        <p>Job Title: I'mma job</p>
                        <p>Job Description: Job is my cue</p>
                        <p>Job Requirements: A job</p>
                        <p>Job Location: Land of the Jobs</p>
                        <p>Job Duration: Job's done</p>
                    </div>
                </div>
            
                <div class="row row-xs-5 text-center" style="background-color:#e5f2ef;min-height:200px">
                        <div class="row">
                            <div style="font-family:Segoe UI Semilight;font-size:1.5em;">Doge, Kuching</div>
                        </div>
                        <div class="row" style="font-family:Segoe UI Light;font-size:1.25em; text-align: left;">
                            <div class="col-xs-4 col-sm-4"></div>
                                <div class="col-xs-10 col-sm-4">
                                    <ul>
                                        <li>Description: It's a job in Kuching</li>
                                        <li>Sector: City</li>
                                        <li>Website: findajob.my</li>
                                    </ul>
                                </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-xs-4 col-sm-4"></div>
                        </div>
                    </div>
      </div>


      @foreach($jobs as $job)
          @foreach($employers as $employer)

            <div class="item">
                <div class="row row-xs-5">
                    <div class="col-md-2 col-md-offset-5 text-center" style="min-height:200px;">
                        <p>Job Title: {{$job->title}}</p>
                        <p>Job Description: {{$job->desc}}</p>
                        <p>Job Requirements: {{$job->requirements}}</p>
                        <p>Job Location: {{$job->location}}</p>
                        <p>Job Duration: {{$job->duration}}</p>
                        <!-- <p>Job Start Date: {{$job->start_date}}</p>
                        <p>Job Salary: {{$job->salary}}</p> -->
                    </div>
                </div>
            
                <div class="row row-xs-5 text-center" style="background-color:#e5f2ef;min-height:200px">
                        <div class="row">
                            <div style="font-family:Segoe UI Semilight;font-size:1.5em;">{{$employer->name}}, Kuching</div>
                        </div>
                        <div class="row" style="font-family:Segoe UI Light;font-size:1.25em; text-align: left;">
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
<div class="row text-center panel panel-footer navbar-fixed-bottom">
            
    </div>
<script>
    $(".carousel").swipe({
  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});

    function goBack() {
      window.history.go(-1);
    }
</script>
@endsection

@section('footer')
    <div class="text-center footer navbar-fixed-bottom" style="padding: 3% 0;">
           <button type="submit" class="glyphicon glyphicon-remove btn btn-circle btn-primary"></button>
            <a href="/boost" type="submit" class="glyphicon glyphicon-flash btn btn-circle btn-primary" style="margin: 0 10%"></a>
            <button type="submit" class="glyphicon glyphicon-ok btn btn-circle btn-primary"></button>
    </div>
@endsection