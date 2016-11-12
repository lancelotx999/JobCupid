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
                    <a class="navbar-brand glyphicon glyphicon-chevron-left" href="/emp/main">Back</a>
              </div>
                <div class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="/emp/main" style="position: fixed; right: 0;top:8px">Done</a>
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
          <div class="col-md-2 col-md-offset-5 text-center" style="min-height:250px;" >
            <h3>Profile Image</h3>
          </div>
        </div>
        <div class="row row-xs-5 text-center" style="background-color:#e5f2ef;min-height:250px">
          <div class="row">
            <div style="font-family:Segoe UI Semilight;font-size:30px;">John Doe, 20</div>
          </div>
          <div class="row" style="font-family:Segoe UI Light;font-size:20px;">
           <div class="col-xs-4 col-sm-4"></div>
           <div class="col-xs-10 col-sm-4">
               <ul>
                  <li>Time Available: Anytime</li>
                  <li>Preferred Field: Anything</li>
                  <li>Skills: Everything</li>
                  <li>Description: Nothing</li>
               </ul>
           </div>
           <div class="clearfix visible-xs-block"></div>
           <div class="col-xs-4 col-sm-4"></div>
        </div>
        </div>
      </div>
      @foreach ($users as $user)
        <div class="item">
          <div class="row row-xs-5">
            <div class="col-md-2 col-md-offset-5 text-center" style="min-height:250px;">
              <h3>Profile Image</h3>
            </div>
          </div>
          <div class="row row-xs-5 text-center" style="background-color:#e5f2ef;min-height:250px">
            <div class="row">
              <div style="font-family:Segoe UI Semilight;font-size:30px;">{{$user->name}}, {{$user->age}}</div>
            </div>
            <div class="row" style="font-family:Segoe UI Light;font-size:20px;">
             <div class="col-xs-4 col-sm-4"></div>
             <div class="col-xs-10 col-sm-4">
                 <ul>
                    <li>Time Available: {{$user->time_available}}</li>
                    <li>Preferred Field: {{$user->preferred_field}}</li>
                    <li>Skills: {{$user->skills}}</li>
                    <li>Description: {{$user->desc}}</li>
                 </ul>
             </div>
             <div class="clearfix visible-xs-block"></div>
             <div class="col-xs-4 col-sm-4"></div>
          </div>
          </div>
        </div>
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