@extends('autenticacion.app')
@section('titulo', 'Sistema - Login')
@section('contenido')
<div class="card mx-auto mt-5 mb-5" style="background-color: #0090d6; max-width: 400px;">
  <div class="card-header" style="background-color: #0090d6;">
    <a
      href="/"
      class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover p-1 rounded text-decoration-none d-block">
      <h1 class="mb-0 text-white"><b>Medical</b> Supples</h1>
    </a>
  </div>
  <div class="card-body login-card-body" style="background-color: #0090d6;">
    <p class="login-box-msg text-white fs-5">Ingrese sus credenciales</p>
    @if(session('error'))
      <div class="alert alert-danger">
        {{session('error')}}
      </div>
    @endif
    @if(Session::has('mensaje'))
        <div class="alert alert-info alert-dismissible fade show mt-2">
            {{Session::get('mensaje')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
        </div>
    @endif
    <form action="{{route('login.post')}}" method="post">
      @csrf
      <div class="input-group mb-1">
        <div class="form-floating">
          <input id="loginEmail" type="email" name="email" value="{{old('email')}}" class="form-control" value="" placeholder="" />
          <label for="loginEmail">Email</label>
        </div>
        <div class="input-group-text bg-white"><span class="bi bi-envelope"></span></div>
      </div>
      <div class="input-group mb-1">
        <div class="form-floating">
          <input id="loginPassword" type="password" name="password" class="form-control" placeholder="" />
          <label for="loginPassword">Password</label>
        </div>
        <div class="input-group-text bg-white"><span class="bi bi-lock-fill"></span></div>
      </div>
      <p class="mb-1"><a class="text-white text-decoration-none" href="{{route('password.request')}}">Recuperar password</a></p>
      <!--begin::Row-->
      <div class="row">
        <!-- /.col -->
        <div class="col-4 mx-auto">
          <div class="d-grid gap-2">
            <button type="submit" class="btn text-white" style="background-color: #4274b9">Acceder</button>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!--end::Row-->
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-card-body -->
</div>
@endsection

      