@extends('layouts.app')

@section('content')

<h2 class="mb-6 fs-8 fw-bolder">Welcome to Xtana Portal</h2>
<p class="text-dark fs-4 mb-7">Reset your password</p>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<form method="POST" action="{{ route('password.email') }}">
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

  <button
    type='submit'
    class="btn btn-primary w-100 mb-7 rounded-pill"
    > {{ __('Send Password Reset Link') }}</button>
  <div class="d-flex align-items-center">
    <p class="fs-3 mb-0 fw-medium"></p>
    <a
      class="text-primary fw-bold ms-2 fs-3"
      href="{{url('/')}}"
      >Back to Log in</a
    >
  </div>
</form>
@endsection
