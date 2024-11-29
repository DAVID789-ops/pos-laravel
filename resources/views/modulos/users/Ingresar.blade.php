@extends('welcome')

@section('ingresar')


    <style type="text/css">
        .login-page, .register-page {
      background: linear-gradient(rgba(0,0,0,1), rgba(0,30,50,1));
    }

    .login-page #back{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: url(storage/plantilla/back.png);
        background-size: cover;
        overflow: hidden;
        z-index: -1;
    }
    </style>

<div id="back"></div>
<div class="login-box">
    <div class="login-logo">
        <img src="storage/plantilla/logo-blanco-bloque.png"  class="img-responsive" style="padding: 30px 100px 0px 100px">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Ingresar</p>

      <form action="{{route('login')}}" method="post">
        @csrf

        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        @error('email')
            <br>
                <div class="alert alert-danger">Email o contraseña incorrecta</div>
            </br>

        @enderror
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">

          <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


    </div>
    <!-- /.login-box-body -->
  </div>
@endsection