@extends('front.master-products')
@section('content')
<main class="main">
    <div class="sale-banner banner appear-animate mt-0" data-animation-delay="100" data-animation-duration="1500">
        <div class="container banner-content">
            <div class="row no-gutter bg-primary mb-0">
                <div class="col-auto col-md-4 d-flex flex-column justify-content-center col-1">
                    <h4 class="align-left text-uppercase mb-0">Olinks &amp; Homes</h4>
                    <h3 class="text-white mb-0 align-left text-uppercase">Huge Sale</h3>
                </div>
                <div class="col-auto col-md-4 col-2">
                    <h2 class="text-white mb-0 position-relative align-left">30<small>%<ins>OFF</ins></small>
                    </h2>
                </div>
                <div class="mb-0 col-md-4 col-3 col-auto">
                    <button class="btn btn-lg btn-dark">Shop Now!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Interiors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gypsum</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-lg-12 main-content">
                <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                    <div class="toolbox-left">
                        <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3"
                                viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                <path
                                    d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                    class="cls-2"></path>
                                <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                <path
                                    d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                    class="cls-2"></path>
                            </svg>
                            <span>Filter</span>
                        </a>

                        <div class="toolbox-item toolbox-sort">
                            <label>Sort By:</label>

                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>
                            <!-- End .select-custom -->


                        </div>
                        <!-- End .toolbox-item -->
                    </div>
                    <!-- End .toolbox-left -->

                    <div class="toolbox-right">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>

                            <div class="select-custom">
                                <select name="count" class="form-control">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                            <!-- End .select-custom -->
                        </div>
                        <!-- End .toolbox-item -->

                        <div class="toolbox-item layout-modes">
                            <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                <i class="icon-mode-grid"></i>
                            </a>
                            <a href="category-list.html" class="layout-btn btn-list" title="List">
                                <i class="icon-mode-list"></i>
                            </a>
                        </div>
                        <!-- End .layout-modes -->
                    </div>
                    <!-- End .toolbox-right -->
                </nav>

                <div class="row">
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-2.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-8.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Electronics</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Porto Brown Chair</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$101.00 – $111.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-21.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-12.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="{{url('/')}}/product/product-name" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Shoes</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Toys</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Porto Both Sticky Info</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$39.00 – $108.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-9.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-13.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">T-shirts</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Toys</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Trousers</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Porto Sports Shoes</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$101.00 – $111.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-10.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-14.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-sale">-23%</span>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Brown Leather Sofa</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$199.00 – $209.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-22.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-15.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="{{url('/')}}/product/product-name" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Dress</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">T-Shirts</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Headphone Black</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-11.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-16.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-sale">-15%</span>
                                </div>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Sofa</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$1,999.00</span>
                                    <span class="product-price">$1,699.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-23.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-17.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="{{url('/')}}/product/product-name" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Dress</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Shoes</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">T-Shirts</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Leather Chair</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$55.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-24.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-18.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Caps</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Simple Chair</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-4.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-26.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Caps</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Product Extended</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-5.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-25.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="{{url('/')}}/product/product-name" class="btn-icon btn-add-cart"><i
                                            class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Caps</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Black Men Coat</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-8.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-1.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Caps</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Porto Arm Chair</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$299.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="{{url('/')}}/product/product-name">
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-2.jpg')}}" alt="product" width="300" height="300" />
                                    <img src="{{asset('theme/assets/images/demoes/demo8/products/product-8.jpg')}}" alt="product" width="300" height="300" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="{{url('/')}}/product-quick-view/product-name" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Electronics</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">Fashion</a>,
                                        <a href="{{url('/')}}/product/product-name" class="product-category">watches</a>
                                    </div>
                                    <a href="wishlist.html" title="Wishlist" class="btn-icon-wish"><i
                                            class="icon-heart"></i></a>
                                </div>
                                <h3 class="product-title">
                                    <a href="{{url('/')}}/product/product-name">Porto Brown Chair</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span>
                                        <!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!-- End .product-ratings -->
                                </div>
                                <!-- End .product-container -->
                                <div class="price-box">
                                    <span class="product-price">$101.00 – $111.00</span>
                                </div>
                                <!-- End .price-box -->
                            </div>
                            <!-- End .product-details -->
                        </div>
                    </div>
                </div>

                <nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Show:</label>

                        <div class="select-custom">
                            <select name="count" class="form-control">
                                <option value="12">12</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>
                        <!-- End .select-custom -->
                    </div>
                    <!-- End .toolbox-item -->

                    <ul class="pagination toolbox-item">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>

        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="mb-4"></div>
    <!-- margin -->
</main>
<!-- End .main -->
@endsection
