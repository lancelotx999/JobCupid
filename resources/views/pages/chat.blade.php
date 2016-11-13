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
                onclick="goBack()"
                style="color: #fff; cursor: pointer;"
              ></a>
              </div>
              <div class="navbar-brand" style="position: absolute; left: 39%; top: 2%; color: #fff"">Chat</div>
              </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
 <div class="container">
    <div class="row" style="margin-top: 30%;">
        <div class="col-xs-12 col-md-8 text-center">
           <h2>You got a match! Awesome!</h2>
        </div>
    </div>
    <div class="row row-xs-5 text-center">
          <button type="submit" class="btn btn-circle btn-xl btn-primary text-uppercase">talk to the employer now</button>
     </div>
  </div>
  <script type="text/javascript">
    function goBack() {
      window.history.go(-1);
    }
  </script>
@endsection
