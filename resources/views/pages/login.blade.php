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
              <div class="navbar-brand" style="color: #fff">Login</div>
            </div>
            </div><!-- /.container-fluid -->
        </nav>
    </header>
@endsection

@section('content_page')
  <div class="container-fluid text-center">
    <div class="row">
        <!--  <h1>LOGO</h1> -->
            <img src="{{ asset('/image/logo.png') }}" class="img-responsive img-circle" alt="Responsive image"> 
             <form method="POST" action="{{ url('/login/') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <p><a href="/">Not registered? Sign up now!</a></p>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> 
    </div>
  </div>
  <script type="text/javascript">
    function goBack() {
      window.history.go(-1);
    }
  </script>
@endsection