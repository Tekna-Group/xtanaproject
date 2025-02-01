@extends('layouts.app')

@section('content')
<h2 class="mb-6 fs-8 fw-bolder">Welcome to Xtana Portal</h2>
<p class="text-dark fs-4 mb-7">Your Admin Dashboard</p>
<div class="d-flex align-items-center gap-3">
  <a
    class="btn btn-white w-100 text-dark border fw-bold d-flex align-items-center justify-content-center rounded-1 py-6 shadow-none"
    href="javascript:void(0)"
    role="button"
  >
    <img
      src="{{asset('design/assets/images/svgs/google-icon.svg')}}"
      alt=""
      class="img-fluid me-7"
      width="24"
      height="24"
    />
    <span class="d-none d-sm-block me-1 flex-shrink-0"
      >Sign in with</span
    >Google
  </a>
  <a
    class="btn btn-white w-100 text-dark border fw-bold d-flex align-items-center justify-content-center rounded-1 py-6 shadow-none"
    href="javascript:void(0)"
    role="button"
  >
    <img
      src="{{asset('design/assets/images/svgs/icon-facebook.svg')}}"
      alt=""
      class="img-fluid me-2"
      width="24"
      height="24"
    />
    <span class="d-none d-sm-block me-1 flex-shrink-0"
      >Sign in with</span
    >FB
  </a>
</div>
<div class="position-relative text-center my-7">
  <p
    class="mb-0 fs-3 px-3 d-inline-block bg-white z-1 position-relative"
  >
    or sign in with
  </p>
  <span
    class="border-top w-100 position-absolute top-50 start-50 translate-middle"
  ></span>
</div>
<form method="POST" action="{{ route('login') }}">
    @csrf
  <div class="mb-7">
    <label
      for="email"
      class="form-label text-dark fw-bold"
      >Email</label
    >
    <input
      type="email"
      class="control form-control{{ $errors->has('email') ? ' is-invalid' : '' }} py-6" name="email" value="{{ old('email') }}" required autofocus"
      id="email"
      aria-describedby="Email"
    />

   
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
  </div>
  <div class="mb-9">
    <label
      for="exampleInputPassword1"
      class="form-label text-dark fw-bold"
      >Password</label
    >
    <input
      type="password" name='password'
      class="form-control py-6"
      id="exampleInputPassword1" required
    />
    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
  </div>
  <div
    class="d-flex align-items-center justify-content-between mb-7 pb-1"
  >
    <div class="form-check">
      <input
        class="form-check-input primary"
        type="checkbox"
        value=""
        id="flexCheckChecked"
         name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
      />
      <label
        class="form-check-label text-dark fs-3"
        for="flexCheckChecked"
      >
        Remember Me
      </label>
    </div>
    <a
      class="text-primary fw-medium fs-3 fw-bold"
    href="{{ route('password.request') }}"
      >Forgot Password ?</a
    >
  </div>
  <button
    type='submit'
    class="btn btn-primary w-100 mb-7 rounded-pill"
    >Sign In</button>
  <div class="d-flex align-items-center">
    <p class="fs-3 mb-0 fw-medium">New to Xtana?</p>
    <a
      class="text-primary fw-bold ms-2 fs-3"
      href="{{url('/register')}}"
      >Create an account</a
    >
  </div>
</form>
@endsection
