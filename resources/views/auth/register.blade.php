<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Pocket Money | LaraSoft | Log In</title>
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
<body class="authentication-bg pb-0">
    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-start mb-5">
                        <a href="{{URL::to('/')}}" class="logo-dark">
                            <span><img src="{{URL::to('backend')}}/assets/images/logo.png" alt="dark logo" height="30"></span>
                        </a>
                        <a href="{{URL::to('/')}}" class="logo-light">
                            <span><img src="{{URL::to('backend')}}/assets/images/logo.png" alt="logo" height="22"></span>
                        </a>
                    </div>

                    <!-- title-->
                    <h4 class="mt-3"></h4>
                    <p class="text-muted mt-4">Don't have an account? Create your account, it takes less than a minute</p>  
                    <div class="text-left w-75 m-auto">
                       <x-auth-validation-errors class="mb-4" :errors="$errors" />
                   </div>
                   <!-- form -->
                   <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input class="form-control" type="text" value="{{old('name')}}" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input class="form-control" name="email" type="email" value="{{old('email')}}" id="email" required placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" required id="password" placeholder="Enter your password" autocomplete="new-password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" required id="password_confirmation" placeholder="Enter your password again">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-muted">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <div class="mb-0 d-grid text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-account-circle"></i> Sign Up </button>
                    </div>

                    <!-- social-->
                    <div class="text-center mt-4">
                        <p class="text-muted font-16">Sign up using</p>
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
                <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="{{route('login')}}" class="text-muted ms-1"><b>Log In</b></a></p>
                </footer>
            </div> 
        </div> 
    </div>

    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3">I love the color!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent software. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
            </p>
            <p>- Pocket Money</p>
        </div> 
    </div>
</div>
<script src="{{URL::to('backend')}}/assets/js/vendor.min.js"></script>
<script src="{{URL::to('backend')}}/assets/js/app.min.js"></script>
</body>
</html>

