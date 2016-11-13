@extends('layouts.master')

@section('titleTag')
    Jobcupid Boast
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
                onclick="goBack()"
                style="color: #fff; cursor: pointer;"
              ></a>

              <div class="navbar-brand" style="position: absolute; left: 39%; top: 2%; color: #fff"">Boost</div>
              </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8 text-center">
           <h2 style="font-family:Segoe UI Semilight;font-size:30px;">Introducing Boost</h2>
           <button type="submit" class="glyphicon glyphicon-flash btn btn-circle btn-primary"></button>
           <h4 style="font-family:Segoe UI Light;font-size:25px;">Got a job?</h4>
           <h4 style="font-family:Segoe UI Light;font-size:25px;">Be the top profile in your area for a whole day!</h4>
        </div>
        <div class="row row-xs-5 text-center">
          <button type="submit" class="btn btn-circle btn-lg btn-primary text-uppercase">activate boost</button>
     </div>
    </div>
    
  </div>
  <script type="text/javascript">
    function goBack() {
      window.history.go(-1);
    }
  </script>
@endsection
