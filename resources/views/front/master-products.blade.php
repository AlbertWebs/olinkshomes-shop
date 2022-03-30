<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <meta name="keywords" content="Olinks Homes" />
    <meta name="description" content="Olinks Homes">
    <meta name="author" content="Designekta Studios">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png')}}">

    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '{{asset('theme/assets/js/webfont.js')}}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/demo8.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/vendor/fontawesome-free/css/all.min.css')}}">

</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="pre-header">
                <div>
                    <div class="container">
                        Get Up to <b>40% OFF</b> New Furniture Deals <small>* Limited time only.</small>
                    </div>
                    <button class="mfp-close"></button>
                </div>
            </div>

            <div class="header-top">
                <div class="header-row container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <a href="#" class="pl-0">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>

                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                    </div>
                    <div class="header-right">
                        <div class="wel-msg text-uppercase d-none d-lg-block">FREE Returns. Standard Shipping Orders $99+
                        </div>
                        <span class="separator d-none d-xl-block"></span>
                        <ul class="top-links mega-menu show-arrow d-none d-sm-inline-block">
                            <li class="item-menu narrow"><a href="dashboard.html">My Account</a></li>
                            <li class="item-menu narrow"><a href="demo8-about.html">About Us</a></li>
                            <li class="item-menu narrow"><a href="blog.html">Blog</a></li>
                            <li class="item-menu narrow"><a href="cart.html">Cart</a></li>
                            <li class="item-menu">
                                <a class="login" href="#">Log In</a>
                            </li>
                        </ul>
                        <span class="separator d-none d-xl-block"></span>
                        <div class="share-links d-none d-xl-block">
                            <a target="_blank" rel="nofollow" class="share-facebook icon-facebook" href="#" title="Facebook"></a>
                            <a target="_blank" rel="nofollow" class="share-twitter icon-twitter" href="#" title="Twitter"></a>
                            <a target="_blank" rel="nofollow" class="share-instagram icon-instagram" href="#" title="Instagram"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left d-lg-block d-none">
                        <div class="header-contact d-none d-lg-flex align-items-center pl-1 mr-lg-5 pr-xl-2">
                            <i class="icon-phone-2"></i>
                            <h6>Call us now<a href="tel:#" class="text-dark font1">+254 70 121 1206</a></h6>
                        </div>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-center">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{asset('theme/assets/images/Olinks-Homes-Presentation-21.png')}}" alt="Olinks Homes" width="104" height="41" />
                        </a>
                    </div>
                    <!-- End .headeer-center -->
                    @include('front.header')
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-flex" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu w-100">
                            <li><a href="{{url('/')}}"><span class="fa fa-home"></span>  Home</a></li>
                            <?php $Category = DB::table('categories')->where('identifier','shop')->get(); ?>
                            @foreach ($Category as $item)
                            <li>
                                <a href="{{url('/')}}/products/{{$item->slung}}">{{$item->title}}</a>
                                <ul>

                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product with variations</a>
                                        <ul>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Post</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            @endforeach
                            <li><a href="{{url('/')}}/products"><span class="fa fa-shopping-cart"></span>  Products </a></li>
                            <li><a href="{{env('LANDING')}}/contact-us"><span class="fa fa-phone"></span> Contact Us</a></li>

                        </ul>
                    </nav>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-bottom -->
        </header>
        <!-- End .header -->

        @yield('content')

        <footer class="footer appear-animate">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row row-sm">
                                <div class="col-sm-4">
                                    <div class="widget">
                                        <h4 class="widget-title">CONTACT INFO</h4>
                                        <ul class="contact-info mb-3">
                                            <li>
                                                <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:+254 70 121 1206">254 70 121 1206</a>
                                            </li>
                                            <li>
                                                <span class="contact-info-label">Email:</span> <a href="mailto:hello@olinkshomes.com">hello@olinkshomes.com</a>
                                            </li>

                                        </ul>
                                        <div class="social-icons">
                                            <a href="#" class="social-icon social-facebook icon-facebook"></a>
                                            <a href="#" class="social-icon social-twitter icon-twitter"></a>
                                            <a href="#" class="social-icon social-instagram icon-instagram"></a>
                                            <a href="#" class="social-icon social-linkedin fab fa-linkedin-in"></a>
                                        </div>

                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-3 -->
                                <div class="col-sm-4">
                                    <div class="widget pl-sm-1">
                                        <h4 class="widget-title">CUSTOMER SERVICE</h4>

                                        <ul class="links">
                                            <li><a href="{{env('LANDING')}}/about-us">About Us</a></li>
                                            <li><a href="{{env('LANDING')}}/contact-us">Contact Us</a></li>
                                            <li><a href="{{url('/')}}/my-account">My Account</a></li>
                                            <li><a href="{{url('/')}}/my-account/orders">Orders history</a></li>
                                            <li><a href="{{url('/')}}/my-account/wishlist">Wishlist</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-5 -->

                                <div class="col-sm-4">
                                    <div class="widget pl-sm-2">
                                        <h4 class="widget-title">ABOUT US</h4>
                                        <ul class="links">
                                            <?php $Category = DB::table('categories')->where('identifier','shop')->inRandomOrder()->limit('5')->get(); ?>
                                            @foreach ($Category as $category)
                                            <li><a href="{{url('/')}}/products/{{$category->slung}}">Shop in {{$category->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!-- End .widget -->
                                </div>
                                <!-- End .col-md-5 -->


                            </div>
                            <!-- End .row -->
                        </div>
                        <!-- End .col-lg-8 -->

                        <div class="col-lg-3">
                            <div class="widget widget-newsletter">
                                <h4 class="widget-title">Subscribe newsletter</h4>
                                <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                                </p>
                                <form action="#">
                                    <input type="email" class="form-control" placeholder="Email address" required>

                                    <input type="submit" class="btn" value="Go!">
                                </form>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .col-lg-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">© copyright <?php echo date('Y'); ?> Olinks Homes. All Rights Reserved.</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons mr-0">
                            <span class="payment-icon visa" style="background-image: url({{asset('theme/assets/images/payments/payment-visa.svg')}})"></span>
                            <span class="payment-icon paypal" style="background-image: url({{asset('theme/assets/images/payments/payment-paypal.svg')}})"></span>
                            <span class="payment-icon stripe" style="background-image: url({{asset('theme/assets/images/payments/payment-stripe.png')}})"></span>
                            <span class="payment-icon verisign" style="background-image:  url({{asset('theme/assets/images/payments/payment-verisign.svg')}})"></span>
                        </div>
                    </div>
                </div>
                <!-- End .footer-bottom -->
            </div>
            <!-- End .containr -->
        </footer>
        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="{{url('/')}}"><span class="fa fa-home"></span>  Home</a></li>
                            <?php $Category = DB::table('categories')->where('identifier','shop')->get(); ?>
                            @foreach ($Category as $item)
                            <li>
                                <a href="{{url('/')}}/products/{{$item->slung}}">{{$item->title}}</a>
                                <ul>

                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Product with variations</a>
                                        <ul>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Post</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            @endforeach

                            <li><a href="{{env('LANDING')}}/contact-us"><span class="fa fa-phone"></span> Contact Us</a></li>

                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="{{url('/')}}">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="{{url('/')}}/products" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="#" class="">
                <i class="#"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="#" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="{{asset('theme/assets/images/logo.png')}}" width="111" height="44" alt="Logo" class="logo-newsletter">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div>
        <!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div>
    <!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/nouislider.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.appear.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('theme/assets/js/main.min.js')}}"></script>

</body>
</html>
