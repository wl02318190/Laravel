@extends('Frontend.layouts.app')

@section('content')
@if (Route::has('login'))
  <div class="top-right links">
      @auth
          <a href="{{ url('/home') }}">Home</a>
      @else
          <a href="{{ route('login') }}">Login</a>
      @endauth
  </div>
  @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
