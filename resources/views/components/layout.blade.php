<!doctype html>
<html class="no-js" lang="">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ranna | {{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap-grid.min.css" integrity="sha512-a+PObWRxNVh4HZR9wijCGj84JgJ/QhZ8dET09REfYz2clUBjKYhGbOmdy9KEHilYKgbMSIHNQEsonv/r75mHXw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    {{ $styles ?? '' }}
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Modernizr Js -->
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    {{-- sweet alert --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.5.2/sweetalert2.css" integrity="sha512-0BcnfLcXBm81KVM/wzoS7yZRVflcQC3rj/Wqgi4cHSGktXTMcXrP6kquf1I14JFUj2LiFCfpZCSf/+478ifefA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        h1,
        label,
        p,
        h2,
        h3,
        h4,
        h5,
        h6{
            font-family: 'Roboto' !important;
        }
        img.logo{
            height: 6em;
        }
        .parsley-errors-list,
        small.error{
            list-style: none;
            margin-bottom: 0;
            padding-left: 0;
            font-size: 12px;
            color: red;
        }
        small.error{
            display:none
        }

        small.error.active{
            display:block;
        }
        img.userprofilepicture{
            height: 3em;
            width: 3em;
            border-radius: 50%;
            margin-right: 1em;
        }
       li .cart-wrap .cart-items{
            padding: 0em;
        }

        li .cart-wrap .cart-items .cart-item{
            border-bottom: 0px ;
        }
        li .cart-items .cart-item:hover{
            background-color: #dfdfdf;
        }
        li .cart-items .cart-item a{
            color: #000;
            display: block;
            width: 100%;
            text-decoration: none;
            padding: 0.5em 1em;
        }
        .logoutForm .logoutBtn{
            width: 100%;
            text-align: start;
            border: 0px;
            padding: 0;
            outline: none;
            cursor: pointer;
            background: transparent;
            padding: 0.5em 1em;
        }
    </style>
    {{ $header ?? '' }}
</head>

<body>

    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper parallaxie repeat-y bg-size-auto" data-bg-image="img/figure/page-bg.jpg">
        <!-- Header Area Start Here -->
        <header class="header-one">
            <div id="header-main-menu" class="header-main-menu header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-3 col-sm-4 col-4 possition-static">
                            <div class="site-logo-mobile">
                                <a href="{{ route('home') }}" class="sticky-logo-dark"><img src="{{ asset('assets/images/logo.png') }}" alt="Site Logo" class="logo"></a>
                            </div>
                            <nav class="site-nav">
                                <ul id="site-menu" class="site-menu">
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Category</a>
                                        <ul class="dropdown-menu-col-1">
                                            @foreach (\App\Models\Specialty::select('id', 'name')->get() as $specialty)
                                                <li>
                                                    <a href="{{ route('blogs.index', ['cat' => $specialty->id]) }}">{{ $specialty->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    {{-- <li class="possition-static hide-on-mobile-menu">
                                        <a href="#">Pages</a>
                                        <div class="template-mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="menu-ctg-title">Home</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="{{ route('home') }}">
                                                                    <i class="fas fa-home"></i>Home
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-ctg-title">Recipes</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="recipe-with-sidebar.html"><i class="fas fa-utensils"></i>Recipes
                                                                    With Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="recipe-without-sidebar.html"><i class="fas fa-utensils"></i>Recipes
                                                                    Without
                                                                    Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="single-recipe1.html"><i class="fas fa-utensils"></i>Single
                                                                    Recipe 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-recipe2.html"><i class="fas fa-utensils"></i>Single
                                                                    Recipe 2</a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-ctg-title">Other Pages</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="about.html"><i class="fab fa-cloudversify"></i>About</a>
                                                            </li>
                                                            <li>
                                                                <a href="author.html"><i class="fas fa-user"></i>Author</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-author.html"><i class="fas fa-user"></i>Author
                                                                    Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="submit-recipe.html"><i class="far fa-share-square"></i>Submit
                                                                    Recipe</a>
                                                            </li>
                                                            <li>
                                                                <a href="login.html"><i class="fas fa-lock"></i>Login</a>
                                                            </li>
                                                            <li>
                                                                <a href="404.html"><i class="fas fa-exclamation-triangle"></i>404
                                                                    Error</a>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-ctg-title">Shop</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="shop.html"><i class="fas fa-shopping-cart"></i>Shop</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-shop.html"><i class="fas fa-shopping-cart"></i>Shop
                                                                    Details</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="hide-on-desktop-menu">
                                        <a href="#">Pages</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="about.html">About</a>
                                            </li>
                                            <li>
                                                <a href="author.html">Author</a>
                                            </li>
                                            <li>
                                                <a href="single-author.html">Author Details</a>
                                            </li>
                                            <li>
                                                <a href="submit-recipe.html">Submit Recipe</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="login.html">404 Error</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('blogs.index') }}">Blog</a>
                                        {{-- <ul class="dropdown-menu-col-1">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="single-blog.html">Blog Details</a></li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li><a href="#">Shop</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="single-shop.html">Shop Details</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="">Chats</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-4 col-md-9 col-sm-8 col-8 d-flex align-items-center justify-content-end">
                            <div class="nav-action-elements-layout1">
                                <ul>
                                    {{-- <li>
                                        <div class="cart-wrap cart-on-mobile d-lg-none">
                                            <div class="cart-info">
                                                <i class="flaticon-shopping-bag"></i>
                                                <div class="cart-amount"><span class="item-currency">$</span>00</div>
                                            </div>
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/top-product1.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Pressure</a>
                                                        <span>Code: STPT601</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$249</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/top-product2.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Stethoscope</a>
                                                        <span>Code: STPT602</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$189</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/top-product3.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Microscope</a>
                                                        <span>Code: STPT603</span>
                                                    </div>
                                                    <div class="cart-quantity">X 2</div>
                                                    <div class="cart-price">$379</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-btn">
                                                        <a href="#" class="item-btn">View Cart</a>
                                                        <a href="#" class="item-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                    @guest    
                                        <li>
                                            <button type="button" class="login-btn" data-toggle="modal" data-target="#LoginModal">
                                                <i class="flaticon-profile"></i>Login
                                            </button>
                                        </li>
                                        <li>
                                            <a href="#" class="fill-btn" data-toggle="modal" data-target="#RegisterModal">
                                                <i class="flaticon-plus-1"></i>Register
                                            </a>
                                        </li>
                                    @endguest
                                    @auth
                                        <li>
                                        <div class="cart-wrap d-none d-lg-block">
                                            <div class="cart-info">
                                                <img src="{{ asset(auth()->user()->file->url) }}" class="userprofilepicture">
                                                <div class="cart-amount text-white">{{ auth()->user()->name }}</div>
                                            </div>
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <a href="{{ route('users.message') }}" class="d-block">
                                                        <i class="fa-solid fa-message"></i> Chats
                                                    </a>
                                                </div>
                                                <div class="cart-item">
                                                    <a href="{{ route('blogs.create') }}" class="d-block"><i class="fa-solid fa-calendar-plus"></i> create blog</a>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img" style="flex: 1;">
                                                        <form action="{{ route('logout') }}" method="post" class="logoutForm">
                                                            @csrf
                                                            <button type="submit" class="logoutBtn">
                                                                <i class="fas fa-sign-out-alt"></i> sign out
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endauth

                                </ul>
                            </div>
                            <div class="mob-menu-open toggle-menu">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="nav-action-elements-layout2">
                                <ul class="nav-social">
                                    <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#" title="skype"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#" title="rss"><i class="fas fa-rss"></i></a></li>
                                    <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="site-logo-desktop">
                                <a href="{{ route('home') }}" class="main-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Site Logo" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="nav-action-elements-layout3">
                                <ul>
                                    <li>
                                        <div class="header-search-box">
                                            <a href="#search" title="Search" class="search-button">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </div>
                                    </li>
                                    {{-- <li>
                                        <div class="cart-wrap d-none d-lg-block">
                                            <div class="cart-info">
                                                <i class="flaticon-shopping-bag"></i>
                                                 working
                                            </div>
                                            <div class="cart-items">
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/top-product1.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Pressure</a>
                                                        <span>Code: STPT601</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$249</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/top-product2.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Stethoscope</a>
                                                        <span>Code: STPT602</span>
                                                    </div>
                                                    <div class="cart-quantity">X 1</div>
                                                    <div class="cart-price">$189</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/top-product3.jpg" alt="product" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="cart-title">
                                                        <a href="#">Microscope</a>
                                                        <span>Code: STPT603</span>
                                                    </div>
                                                    <div class="cart-quantity">X 2</div>
                                                    <div class="cart-price">$379</div>
                                                    <div class="cart-trash">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="cart-item">
                                                    <div class="cart-btn">
                                                        <a href="#" class="item-btn">View Cart</a>
                                                        <a href="#" class="item-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->

        {{-- contents starts --}}
            {{ $slot }}
        {{-- contents ends--}}

        <!-- Footer Area Start Here -->
        <footer class="ranna-bg-dark">
            <div class="container">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="footer-logo"></a>
                </div>
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">FACEBOOK</a></li>
                        <li><a href="#">TWITTER</a></li>
                        <li><a href="#">INSTAGRAM</a></li>
                        <li><a href="#">PINTEREST</a></li>
                        <li><a href="#">GOOGLEPLUS</a></li>
                        <li><a href="#">YOUTUBE</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Search Box Start Here -->
    <div id="search" class="search-wrap">
        <button type="button" class="close">×</button>
        <form class="search-form" method="GET" method="{{ route('blogs.index') }}">
            <input type="search" value="" placeholder="Type here........" name="q"/>
            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
        </form>
    </div>
    <!-- Search Box End Here -->
    @guest
        <!-- Modal Start-->
        {{-- send reset password link modal --}}
        <div class="modal fade" id="passwordResetModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title-default-bold mb-none">Password Reset</div>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fa-solid fa-xmark text-2xl"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form" id="passwordResetForm" method="POST" data-parsley-validate>
                            @csrf
                            <input class="main-input-box" type="email" placeholder="Email" name="email" data-parsley-required data-parsley-type="email"/>
                            <div class="inline-box mb-5 mt-4">
                                <button class="btn-fill" type="submit" id="sendLinkBtn">Send Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- login Modal --}}
        <div class="modal fade" id="LoginModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title-default-bold mb-none">Login</div>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="fa-solid fa-xmark text-2xl"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form" id="loginForm" method="POST" data-parsley-validate>
                            @csrf
                            <input class="main-input-box" type="email" placeholder="Email" name="email" data-parsley-required data-parsley-type="email"/>
                            <input class="main-input-box" type="password" placeholder="Password" name="password" data-parsley-required />
                            <div class="inline-box mb-5 mt-4">
                                <div class="checkbox checkbox-primary">
                                    <input id="modal-checkbox" type="checkbox" name="remember">
                                    <label for="modal-checkbox">Remember Me</label>
                                </div>
                                <label class="lost-password"><a href="#" id="showPasswordResetModal">Lost your password?</a></label>
                            </div>
                            <div class="inline-box mb-5 mt-4">
                                <button class="btn-fill" type="submit" id="loginBtn">Login</button>
                                <a href="#" class="btn-register" id="showRegisterModal"><i class="fas fa-user"></i>Register Here!</a>
                            </div>
                        </form>
                        <div class="login-box-social">
                            <label>Login connect with your Social Network</label>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Registration Modal --}}
        <div class="modal fade" id="RegisterModal"  tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title-default-bold mb-none">Register</div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="login-form" id="registrationForm" method="POST" data-parsley-validate>
                            @csrf
                            <input class="main-input-box" type="text" placeholder="Name" name="name" data-parsley-required/>
                            <small class="error name"></small>
                            <input class="main-input-box" type="email" placeholder="Email" name="email" data-parsley-required data-parsley-type="email"/>
                            <small class="error email"></small>
                            <select name="specialty_id" class="main-input-box" data-parsley-required>
                                <option value="" selected disabled>Choose your area of Specialization</option>
                                @foreach (\App\Models\Specialty::get() as $specialty)
                                <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                @endforeach
                            </select>
                            <small class="error specialty_id"></small>
                            <input class="main-input-box" type="file" placeholder="Profile Picture" name="avatar" data-parsley-required/>
                            <small class="error avatar"></small>
                            <input class="main-input-box" type="password" placeholder="Password" name="password" data-parsley-required/>
                            <small class="error password"></small>
                            <div class="inline-box mb-5 mt-4">
                                <button class="btn-fill" type="submit" id="registerBtn">
                                    Register
                                </button>
                                <a href="#" class="btn-register" id="showLoginModal"><i class="fas fa-user"></i>Login Here!</a>
                            </div>
                        </form>
                        <div class="login-box-social">
                            <label>Login connect with your Social Network</label>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End-->
    @endguest
    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <!-- Plugins Js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    {{ $scripts ?? '' }}
    <!-- Smoothscroll Js -->
    <script src="{{ asset('assets/js/smoothscroll.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- sweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @guest
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
        <script>
            $('#loginForm').parsley();
            $('#registrationForm').parsley();
            $('#passwordResetForm').parsley();
            $(document).ready(function () {
                $('#showRegisterModal').on('click',function () {
                    $('#LoginModal').modal('hide');
                    $('#RegisterModal').modal('show');
                });
                $('#showLoginModal').on('click',function () {
                    $('#RegisterModal').modal('hide');
                    $('#LoginModal').modal('show');
                });
                $('#showPasswordResetModal').on('click',function () {
                    $('#LoginModal').modal('hide');
                    $('#passwordResetModal').modal('show');
                });
            });

            $('#registrationForm').on('submit', function(){
                event.preventDefault();
                var form = $(this);
                form.find('#registerBtn').html(`<img src="`+@json(asset('assets/images/loading.gif'))+`" style="height:1.5em" alt="loading..">`)
                var formData = new FormData(form[0]);
                axios.post(window.location.origin+'/register', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(function (response) {
                    if(response.status == 201){
                        $('#RegisterModal').modal('hide');
                        Swal.fire({
                            title: "Registration Successful",
                            text: response.data.message,
                            icon: "success",
                            button: "Ok",
                        }).then(() => {
                            window.location.reload();
                        });
                    }
                })
                .catch(function (error) {
                    form.find('#registerBtn').html('Register') 
                    if(error.response.status === 422){
                        var errors = error.response.data.errors;
                        Object.keys(error.response.data.errors).forEach(function (key) {
                            form.find('small.'+key).html(errors[key][0]);
                            form.find('small.'+key).addClass('active')
                        });
                    }
                }).finally(() => {
                    form.find('#registerBtn').html('Register') 
                });
            });

            $('#loginForm').on('submit', function() {
                event.preventDefault();
                var form = $(this);
                form.find('#loginBtn').html(`<img src="`+@json(asset('assets/images/loading.gif'))+`" style="height:1.5em" alt="loading..">`)
                var formData = new FormData(form[0]);
                axios.post(window.location.origin+'/login', formData)
                .then(function (response) {
                    form.find('#LoginBtn').html('Login') 
                    if(response.status == 200){
                        window.location = response.data.route;
                    }
                })
                .catch(function (error) {
                    // form.find('#LoginBtn').html('Login') 
                    if(error.response.status === 422){
                        var errors = error.response.data.errors;
                        $('#LoginModal').modal('hide');
                        Swal.fire({
                            title: "Authentication Failed",
                            text: errors.email[0],
                            icon: "error",
                            button: "Ok",
                        })
                        // Object.keys(error.response.data.errors).forEach(function (key) {
                        //     form.find('small.'+key).html(errors[key][0]);
                        //     form.find('small.'+key).addClass('active')
                        // });
                    }
                }).finally(() => {
                    // $('#LoginModal').modal('hide');
                    form.find('#loginBtn').html('Login') 
                });
            });
            $('#passwordResetForm').on('submit', function(){
                event.preventDefault();
                var form = $(this);
                form.find('#sendLinkBtn').html(`<img src="`+@json(asset('assets/images/loading.gif'))+`" style="height:1.5em" alt="loading..">`)
                var formData = new FormData(form[0]);
                axios.post(window.location.origin+'/forgot-password', formData)
                .then(response => {
                    form.find('#sendLinkBtn').html('Send Link')
                    $('#passwordResetModal').modal('hide');
                    Swal.fire({
                        title: "Password Reset Link Sent",
                        text: response.data.message,
                        icon: "success",
                        button: "Thanks",
                    });
                }).catch(err => {
                    console.log('password reset error',err.response)
                })
                .finally(() => {
                    form.find('#sendLinkBtn').html('Send Reset Link') 
                })
            });
            if (@json(request()->has('status'))) {
                if (@json(request()->status == 'login')) {
                    $('#LoginModal').modal('show');
                }else if(@json(request()->status == 'register')){
                    $('#RegisterModal').modal('show');
                }
            }
        </script>
    @endguest

    {{ $footer ?? '' }}
</body>
</html>