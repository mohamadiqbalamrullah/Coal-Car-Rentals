@extends('layouts/fullLayoutMaster')

@section('title', $title)

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/authentication.css')) }}">
@endsection

@section('content')
<div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Login basic -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="#" class="brand-logo">
          <h2 class="brand-text ms-1" style="color: #1D1CE5">COAL VEHICLE PERMIT</h2>
        </a>

        <p class="card-text mb-2 text-center">PT COAL MEMBARA</p>

        <form class="auth-login-form mt-2" action="/login" method="post">
          @csrf

          <div class="mb-1">
            <label for="login-email" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              id="login-email"
              name="email"
              placeholder="nama@example.com"
              aria-describedby="login-email"
              tabindex="1"
              autofocus
              required
            />
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Kata Sandi</label>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="login-password"
                name="password"
                tabindex="2"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="login-password"
                required
              />
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
          </div>

          @if(session()->has('error'))
            <div class="alert alert-danger">
              <div class="alert-body text-center">
                {{ session('error')}}  
              </div>
            </div>
          @endif

          <button class="btn w-100" tabindex="4" style="background-color: #1D1CE5; color:aliceblue">Sign in</button>
        </form>
      </div>
    </div>
    <!-- /Login basic -->
  </div>
</div>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/forms/validation/jquery.validate.min.js'))}}"></script>
@endsection

@section('page-script')
<script src="{{asset(mix('js/scripts/pages/auth-login.js'))}}"></script>
@endsection
