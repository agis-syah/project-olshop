@extends('auth')
@section('title', 'Reset Password')
@section('content')
<div class="login-box">
    <div class="login-logo">
    <a href="{{ url("/")}}"><b>SI</b> Elektronik</a>
    </div>
  
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Forgot password</p>
  
        <form action="{{ route('reset') }}" method="post">
        @csrf
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
          @enderror

          <!-- /.col -->
          <div class="col-4 float-right">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Recover</button>
          </div>
          <!-- /.col -->
        </form>
  
        <a href="{{ route('login')}}" class="text-center">I already have a membership</a>
      </div>
</div>
@endsection
