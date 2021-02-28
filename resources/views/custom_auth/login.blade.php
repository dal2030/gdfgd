@extends('layout.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
    @if( session('error1'))
        <div class="alert alert-danger">{{ session('error1') }}</div>
      @endif
      <div class="auto-form-wrapper">
      
        <form method="POST" action="{{ route('loginpost') }}">
        {{ csrf_field() }}
          <div class="form-group">
            <label class="label">Email</label>
            <div class="input-group">
              <input name="email" type="text" class="form-control" placeholder="email">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="label">Password</label>
            <div class="input-group">
              <input name="password" type="password" class="form-control" placeholder="*********">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Login</button>
          </div>
          <div class="form-group d-flex justify-content-between">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection