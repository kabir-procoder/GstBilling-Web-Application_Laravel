@extends('layouts.app')
@section('content')

<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>GST</b>Billing</a>
  </div>

  <div class="card">

    <div class="card-body register-card-body">

      @include('_message')

      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ url('register-post') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <span style="color: red;">{{ $errors->first('name') }}</span>
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Username" value="{{ old('name') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <span style="color: red;">{{ $errors->first('email') }}</span>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <span style="color: red;">{{ $errors->first('password') }}</span>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
              <label for="agreeTerms">
               I agree to the terms
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{ url('/') }}" class="text-center">Login</a>
      <p class="mb-0">
        <a href="{{ url('forgot-password') }}">Forgot your password</a>
      </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

@endsection
