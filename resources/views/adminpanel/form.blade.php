@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')

@section('content')
<div class="col-md-6 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Horizontal Form</h4>
      </div>
      <div class="card-body">
        <form class="form form-horizontal">
          <div class="row">
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="first-name">First Name</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name" />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Email</label>
                </div>
                <div class="col-sm-9">
                  <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email" />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="contact-info">Mobile</label>
                </div>
                <div class="col-sm-9">
                  <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile" />
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="password">Password</label>
                </div>
                <div class="col-sm-9">
                  <input type="password" id="password" class="form-control" name="password" placeholder="Password" />
                </div>
              </div>
            </div>
            <div class="col-sm-9 offset-sm-3">
              <div class="mb-1">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="customCheck1" />
                  <label class="form-check-label" for="customCheck1">Remember me</label>
                </div>
              </div>
            </div>
            <div class="col-sm-9 offset-sm-3">
              <button type="reset" class="btn btn-primary me-1">Submit</button>
              <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection