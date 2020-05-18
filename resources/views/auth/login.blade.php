

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>GPS-Cameroon</title>
        @include('layouts.components.header')

    </head>
<body class="body">


<div class="row" style="z-index:30;position:relative">
            <div class="col-lg-5">
                <div class="row arrow">
                    <div class="col-lg-12 upper"></div>
                    <div class="col-lg-12 under"></div>
                </div>
                <div class="welcomeView">
                    <div class="we-header">
                    <h6 style="font-size:14px">Visit our official pages:</h6>
                        <div class="text-right">
                            <a href="#"><i class="we-icx fb fab fa-facebook"></i></a>
                            <a href="#"><i class="we-icx tw fab fa-twitter"></i></a>
                            <a href="#"><i class="we-icx ln fab fa-linkedin"></i></a>
                            <a href="#"><i class="we-icx in fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="we-sm-img">
                    <img src="{{ url('/img/keep-eye.png') }}"  style="width:500px"/>
                    </div>
                    <div class="we-body">
                        <h1>Cameroon GPS</h1>
                        <img id="we-logo" class="logo" src="{{ url('/img/network.png') }}" alt="logo" style="width:40px"/>
                        <br/>
                    </div>
                    <div class="we-carousel">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">  
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <h5>Get Started</h5>
                                    <p style="font-size:16px;color:white">Register now and start tracking your vehicle!</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h5>Easy To Use</h5>
                                    <p style="font-size:16px">They stole your car? Come and stop your car here...</p>
                                </div>
                                </div>
                                <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h5>Area Restriction Mode</h5>
                                    <p style="font-size:16px">
                                        Restrict the area where your vehicles can move
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h5>Claim 30 Days Free Trial</h5>
                                    <p style="font-size:16px">
                                        Start by using our platform freely, just sign up and GO!
                                    </p>
                                </div>
                            </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            </ol>  
                            </div>
                    </div>
                    <div class="we-footer">
                        <h6>Get our mobile app on:</h6>
                        <a href="#"><img src="{{ url('/img/gplay.png') }}" alt="logo" style="width:120px"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  offset-1">
                <div class="my-login-page">
                <section class="h-100">
                    <div class="container h-100">
                        <div class="row justify-content-md-center h-100">
                            <div class="card-wrapper">
                                <div class="brand">
                                    <img class="logo" src="{{ url('/img/network.png') }}" alt="logo" style="width:70px">
                                </div>
                                <div class="card fat">
                                    <div class="card-body">
                                        <h4 class="card-title">Login</h4>
                                        <form action="{{route('login')}}" method="POST" class="my-login-validation" novalidate="">
                                        {{ csrf_field()}}
                                            <div class="form-group">
                                                <label for="email">E-Mail Address</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                <div class="invalid-feedback">
                                                    Email is invalid
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="password">Password
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        <small style="padding-left:55px">{{ __('Forgot Your Password?') }}</small>
                                                    </a>
                                                @endif
                                                </label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-eye>
                                                <div class="invalid-feedback">
                                                    Password is required
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" name="remember" id="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="remember" class="custom-control-label">Remember Me</label>
                                                </div>
                                            </div>

                                            <div class="form-group m-0">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Login
                                                </button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                Don't have an account? <a href="/register">Create One</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
    </div>



    @include('layouts.components.footer-scripts')
</body>
</html>

