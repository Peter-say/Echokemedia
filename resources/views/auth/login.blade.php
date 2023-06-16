@extends('web.layout.app')

@include('web.layout.includes.header')

@section('contents')
    <div class="container m-5">
        <nav id="site-navigation-pro ">
            <div class="modal-content">
                <div class="row d-flex justify-content-center">
                    <div class=" col-xl-8 col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center">
                        <div class="">
                            <form method="POST" action="{{ route('login') }}">@csrf
                                <div class="form-group">
                                    <input id="email" type="text" placeholder="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-green-pro btn-display-block">Sign In</button>
                                </div>
                                <div class="container-fluid">
                                    <div class="row no-gutters">
                                        <div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"
                                                name="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}}><label for="checkbox-remember"
                                                class="col-form-label">Remember me</label></div>
                                        <div class="col forgot-your-password"><a href="#!">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div><!-- close .container-fluid -->

                            </form>


                        </div><!-- close .registration-social-login-container -->

                    </div>
                    {{-- <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center">
                       <div>
                        <b>Or</b>
                       </div>
                    </div>

                    <div class=" col-xl-8 col-lg-8 col-md-12 col-sm-12 d-flex justify-content-center">
                        <div class="registration-social-login-options">
                            <h6>Sign in with your social account</h6>
                            <div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
                            <div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
                            <div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
                        </div><!-- close .registration-social-login-options -->
                    </div> --}}
                </div>
            </div>

    </div>
    {{-- 
    <button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign
        In</button> --}}
    </div>

    {{-- @include('web.layout.includes.modal') --}}
@endsection




























{{-- <div class="container"></div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div  style="background-image: url('{{ $dashboard_assets}}/assets/img/bg-01.jpg');">
            </div> -->
        </div>
        <div class="col-md-6">
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
    
</div> --}}
