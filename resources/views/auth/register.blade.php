
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPS-Cameroon</title>
        <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/css/custom.css') }}">
        <link rel="stylesheet" href="{{ url('/css/login.css') }}">

    </head>
<body class="body">
    <div class="wave-container" style="position:absolute;z-index:0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4a346b" fill-opacity="1" d="M0,192L60,165.3C120,139,240,85,360,64C480,43,600,53,720,90.7C840,128,960,192,1080,208C1200,224,1320,192,1380,176L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
        </svg>
    </div>
    <div class="row uppere">
            <div class="col-lg-4" style="z-index:4">
                <img src="{{ url('/img/wallpaper1.png') }}" style="width:650px">
            </div>
            <div class="col-lg-4 rotate-img">
                <img src="{{ url('/img/wallpaper2.png') }}">
            </div>
        </div>
    
    <div class="row" style="z-index:30;position:relative">
            <div class="col-lg-6 offset-3">
                <div class="my-login-page">
                <section class="h-100">
                    <div class="container h-100">
                        <div class="row justify-content-md-center h-100">
                            <div class="card-wrapper card-register">
                                <div class="brand" style="background-color:white">
                                <img class="logo" src="{{ url('/img/network.png') }}" alt="logo" style="width:70px;">
                                </div>
                                <div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form action="{{ route('register') }}" method="POST" class="my-login-validation" novalidate="">
                                {{ csrf_field()}}
                                <div class="form-group">
									<label for="name">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required>
									<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" data-eye>
									@error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>

                                <div class="form-group">
									<label for="confirm_password">Confirm Password</label>
									<input id="confirm_password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="index.html">Login</a>
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

    <script src="{{ url('/js/jquery-3.2.1.min.js') }}" ></script>
	<script src="{{ url('/js/bootstrap.js') }}" ></script>
	<script src="{{ url('/js/bootstrap.min.js') }}"></script>
	<script src="{{ url('/js/my-login.js') }}"></script>
</body>
</html>
