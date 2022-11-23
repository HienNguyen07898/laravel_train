@extends('layouts.login')

@section('title', 'Login')

@section('content')
@if (session('status'))
         <ul>
             <li class="text-danger"> {{ session('status') }}</li>
         </ul>
     @endif
<div class="login-box">
    <div class="login-logo">
      <a href="">{{ __('login.formTitle') }}</a>
    </div>

    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('login.description') }}</p>

        <form action="{{ route('getLogin') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="{{ __('login.email') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="{{ __('login.password') }}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">

            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">{{ __('login.signIn') }}</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  @section('script')
  <script type="text/javascript">
  </script>

@endsection

