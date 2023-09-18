<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{env('APP_NAME', 'Laravel')}} | Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="theLaraSoft is an IT company based in Dhaka, Bangladesh which offers web design, web development, Ecommerce solutions & domain & hosting services in more than 5 countries."/>
    <meta name="keywords" content="Pocket Money, Wallet, Money Management, Income, Expenses" />
    <meta name="description" content="Get The Competitive Edge With Software Solutions Designed Locally For You
    Qualified Staff to Develop and Customize Your Software. Give Us a Call and Learn More.Providing You Quality Software Services Here in Bangladesh. Call Us.Innovative Software Solutions at Prices You Can Afford. Learn More Details.
    Dependable Software Solutions for Diverse Applications. Request More Details."/>
    <meta name="author" content="theLaraSoft">
    <meta name="og:title" content="theLaraSoft is an IT company based in Dhaka, Bangladesh which offers web design, web development, Ecommerce solutions &amp; domain &amp; hosting services in more than 5 countries."/>
    <meta name="og:type" content="website"/>
    <meta name="og:url" content="https://PocketMoney.thelarasoft.com/"/>
    <meta name="og:image" content="https://PocketMoney.thelarasoft.com/logo/about-company.jpg"/>
    <meta name="og:site_name" content="PocketMoney.thelarasoft.com"/>
    <meta name="og:description" content="LaraSoft is a technical agency based in Dhaka, Bangladesh. We had started website design & development in mind but with the time the canvas is widened as full service software development company. Known as the best web design company in Bangladesh. We are strategists, designers, producers and technologists who share a passion for creating great ideas and translating them into engaging user experiences, meaningful relationship with business and consumer."/>

    <link rel="shortcut icon" href="{{URL::to('backend')}}/assets/images/favicon.ico">
    <script src="{{URL::to('backend')}}/assets/js/hyper-config.js"></script>
    <link href="{{URL::to('backend')}}/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{URL::to('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
 <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">
                    <div class="card-header pt-4 pb-4 text-center">
                        <a href="{{URL::to('/')}}">
                            <span><img src="{{URL::to('backend')}}/assets/images/logo.png" alt="logo" height="40"></span>
                        </a>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                            <a href="{{ route('bdcs.search-code') }}" target="_blank" class="text-dark-50 text-center pb-0 fw-bold">Sign In</a>
                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                        </div>
                        <div class="text-left w-75 m-auto">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                             @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" required placeholder="Enter your email" value="{{old('email')}}">
                            </div>
                            <div class="mb-3">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-muted float-end"><small>Forgot your password?</small></a>
                                @endif

                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="current-password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember" checked>
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
                            </div>
                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                     @if (Route::has('register'))
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Sign Up</b></a></p>
                    </div>
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-alt">
    © 2023 - <span>{{env('APP_NAME')}} v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span> {{env('APP_NAME')}}. Design and coded by
Zillur</p>
</footer>
<script src="{{URL::to('backend')}}/assets/js/vendor.min.js"></script>
<script src="{{URL::to('backend')}}/assets/js/app.min.js"></script>
</body>
</html>
