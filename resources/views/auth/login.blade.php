<? /*@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection */ ?>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>??????????????????????</title>

    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<form class="main-page2-container" method="POST" action="{{ route('login') }}">
    @csrf
    <input type="hidden" name="remember" id="remember" value="on">
    <img src="{{ asset('css/mial.png') }}" class="img-mial" alt="Mial">
    <div class="main-page2-container__block">
        <div class="main-page2-container_max-width">
            <div class="main-page2-container__autorize main-page2-container__autorize-bottom">
                ??????????????????????
            </div>

            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>???????????????? ?????????? ?????? ????????????</strong>
                </span>
            @enderror

            <div class="main-page2-container__flex-block">
                <div class="main-page2-container__autorize">
                    ??????????
                </div>
                <input id="login" type="email" class="main-page2-container_input @error('email') border-arror @enderror" name="email" value="{{ old('email') }}" required
                       autocomplete="email" autofocus>
            </div>

            <div class="main-page2-container__flex-block">
                <div class="main-page2-container__autorize">
                    ????????????
                </div>
                <input id="pass" type="password" class="main-page2-container_input @error('password') border-arror @enderror" name="password" required
                       autocomplete="current-password">
            </div>
        </div>
    </div>
    <div class="main-page2-container-button">
        <button type="submit" class="main-page-container-button__link" id="vhod">
            <div class="main-page-container-button__item">
                ??????????
            </div>
        </button>
    </div>
</form>
</body>
</html>

