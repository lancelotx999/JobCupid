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
                </div>
              
              <div class="navbar-brand" style="position: absolute; left: 40.3%; top: 2%; color: #fff"">Filter</div>
              </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8 text-center">
           <h2 style="font-family:Segoe UI Semilight;font-size:30px;">Introducing Filter</h2>
           <button type="submit" class="glyphicon glyphicon-filter btn btn-circle btn-primary"></button>
           <h4 style="font-family:Segoe UI Light;font-size:25px;">Got a specific taste for job?</h4>
           <h4 style="font-family:Segoe UI Light;font-size:25px;">Activate the filter feature now</h4>
        </div>
    <div class="row row-xs-5 text-center">
          <button type="submit" class="btn btn-circle btn-lg btn-primary text-uppercase">activate filter</button>
     </div>
  </div>
  <script type="text/javascript">
    function goBack() {
      window.history.go(-1);
    }
  </script>
@endsection
