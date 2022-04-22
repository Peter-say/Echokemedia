@extends('web.layout.app' , ["meta_title" => "Signup"])


@section('contents')
    <div id="content-pro">


        <div id="pricing-plans-background-image">
            <div class="container">
                <div class="registration-steps-page-container">

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                        class="registration-steps-form">@csrf

                        <div class="registration-social-login-container">

                            <div class="form-group">
                                <label for="name" class="col-form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="John Doe">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="jondoe@gmail.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password"
                                            placeholder="&middot;&middot;&middot;&middot;&middot;&middot;">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="confirm-password" class="col-form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="registration-social-login-or">or</div>

                        </div><!-- close .registration-social-login-container -->

                        <div class="registration-social-login-options">
                            <h6>Sign up with one of your social accounts</h6>
                            <div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook
                            </div>
                            <div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
                            <div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google
                            </div>
                        </div><!-- close .registration-social-login-options -->

                        <div class="clearfix"></div>
                        <div class="form-group last-form-group-continue">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                            <div class="clearfix"></div>
                        </div>
                      
                    </form>

                </div><!-- close .registration-steps-page-container -->

            </div><!-- close .container -->
        </div><!-- close #pricing-plans-background-image -->

    </div><!-- close #content-pro -->

    <footer id="footer-pro">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="copyright-text-pro">&copy; Copyright 2018 SKRN. All Rights Reserved</div>
                </div><!-- close .col -->
                <div class="col-md">
                    <ul class="social-icons-pro">
                        <li class="facebook-color"><a href="http://facebook.com/progressionstudios" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter-color"><a href="http://twitter.com/Progression_S" target="_blank"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="youtube-color"><a href="http://youtube.com/" target="_blank"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li class="vimeo-color"><a href="http://vimeo.com/" target="_blank"><i
                                    class="fab fa-vimeo-v"></i></a></li>
                    </ul>
                </div><!-- close .col -->
            </div><!-- close .row -->
        </div><!-- close .container -->
    </footer>

    <a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>
@endsection
