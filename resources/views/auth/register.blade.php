@extends('layouts.guest')

@section('content')
<body class="hold-transition register-page">
    <div class="register-box" id="app">
        <div class="login-logo">
            <a href="{{ route('index') }}">{{ config('app.name') }}</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body shadow rounded-lg">
                <p class="login-box-msg">Register a new membership</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="font-weight-normal">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="font-weight-normal">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="font-weight-normal">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="font-weight-normal">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection
