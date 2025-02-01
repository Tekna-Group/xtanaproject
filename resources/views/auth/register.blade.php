@extends('layouts.app')

@section('content')
<h2 class="mb-6 fs-8 fw-bolder">Welcome to Xtana Portal</h2>
<p class="text-dark fs-4 mb-7">Register Now</p>

<form method="POST" action="{{ route('register') }}">
    @csrf

  <div class="mb-7">
    <label
      for="name"
      class="form-label text-dark fw-bold"
      >Name</label
    >
    <input
      type="text"
      class="control form-control{{ $errors->has('name') ? ' is-invalid' : '' }} py-6" name="name" value="{{ old('name') }}" required 
      id="name"
      aria-describedby="Name"
    />

   
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
  </div>

  <div class="mb-7">
    <label
      for="email"
      class="form-label text-dark fw-bold"
      >Email</label
    >
    <input
      type="email"
      class="control form-control{{ $errors->has('email') ? ' is-invalid' : '' }} py-6" name="email" value="{{ old('email') }}" required 
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
  <div class="mb-9">
    <label
      for="confirmpassword"
      class="form-label text-dark fw-bold"
      >Confirm Password</label
    >
    <input
      type="password" name='confirmpassword'
      class="form-control py-6"
      id="confirmpassword" required
    />
    @if ($errors->has('password'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
  </div>

  @if ($errors->has('password'))
  <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
  </span>
@endif
  <button
    type='submit'
    class="btn btn-primary w-100 mb-7 rounded-pill"
    >Sign Up</button>
  <div class="d-flex align-items-center">
    <a
      class="text-primary fw-bold ms-2 fs-3"
      href="{{url('/')}}"
      >Back to Login</a
    >
  </div>
</form>
@endsection
