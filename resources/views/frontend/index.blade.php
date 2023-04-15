<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content=""/>
    <meta name="author" content="DexignZone"/>
    <meta name="robots" content=""/>
    <meta name="description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
    <meta property="og:image" content="https://makaanlelo.com/tf_products_007/bookland/xhtml/social-image.png"/>
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/favicon.png')}}"/>

    <!-- PAGE TITLE HERE -->
    <title>Al Athariah Library</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/icons/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>
<body>

<div class="page-wraper">
    <div id="loading-area" class="preloader-wrapper-1">
        <div class="preloader-inner">
            <div class="preloader-shade"></div>
            <div class="preloader-wrap"></div>
            <div class="preloader-wrap wrap2"></div>
            <div class="preloader-wrap wrap3"></div>
            <div class="preloader-wrap wrap4"></div>
            <div class="preloader-wrap wrap5"></div>
        </div>
    </div>

    <!-- Header -->
    <header class="site-header mo-left header style-1">
        <!-- Main Header -->
        <div class="header-info-bar">
            <div class="container clearfix">
                <!-- Website Logo -->
                <div class="logo-header logo-dark">
                    <a href="index.html">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="logo">
                    </a>
                </div>

                <!-- EXTRA NAV -->

                <!-- header search nav -->
                <div class="header-search-nav">
                    <div class="header-item-search">
                        <div class="input-group search-input">
                            <select class="default-select">
                                <option>تصنيفات</option>
                                <option>الفقه</option>
                                <option>ابسيرة</option>
                                <option>العقيدة</option>
                                <option>التوحيد</option>
                                <option>الشبهات</option>
                                <option>الاصول</option>
                                <option>التزكية</option>
                                <option>التاريه</option>
                                <option>الحديث و علومه</option>
                                <option>النحو</option>
                                <option>المذاهب و الفرق</option>
                            </select>

                            <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                   placeholder="ابحث عن كتب">
                            {{--                            <button class="btn btn-primary btnhover">--}}
                            {{--                                Search--}}
                            {{--                            </button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header End -->

        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark">
                        <a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
                    </div>

                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="#" class="btn btn-primary btnhover">تسجيل</a>
                        </div>

                    </div>

                    <!-- Main Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                        <div class="logo-header logo-dark">
                            <a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
                        </div>
                        <div class="search-input">
                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                       placeholder="Search Books Here">
                                <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                            </div>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>الصفحة الرئيسية</span>
                                </a>

                            </li>
                            <li>
                                <a href="about-us.html">
                                    <span>من نحن</span>
                                </a>
                            </li>
                            {{--							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Pages</span></a>--}}
                            {{--								<ul class="sub-menu">--}}
                            {{--									<li><a href="my-profile.html">My Profile</a></li>--}}
                            {{--									<li><a href="services.html">Services</a></li>--}}
                            {{--									<li><a href="faq.html">FAQ's</a></li>--}}
                            {{--									<li><a href="help-desk.html">Help Desk</a></li>--}}
                            {{--									<li><a href="coming-soon.html">Coming Soon</a></li>--}}
                            {{--									<li><a href="pricing.html">Pricing</a></li>--}}
                            {{--									<li><a href="privacy-policy.html">Privacy Policy</a></li>--}}
                            {{--									<li><a href="under-construction.html">Under Construction</a></li>--}}
                            {{--									<li><a href="error-404.html">Error 404</a></li>--}}
                            {{--								</ul>--}}
                            {{--							</li>--}}
                            {{--							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Shop</span></a>--}}
                            {{--								<ul class="sub-menu">--}}
                            {{--									<li><a href="books-grid-view.html">Shop Grid</a></li>--}}
                            {{--									<li><a href="books-grid-view-sidebar.html">Shop Grid Sidebar</a></li>--}}
                            {{--									<li><a href="books-list.html">Shop List</a></li>--}}
                            {{--									<li><a href="books-list-view-sidebar.html">Shop List Sidebar</a></li>--}}
                            {{--									<li><a href="books-detail.html">Shop Detail</a></li>--}}
                            {{--									<li><a href="shop-cart.html">Cart</a></li>--}}
                            {{--									<li><a href="shop-checkout.html">Checkout</a></li>--}}
                            {{--									<li><a href="wishlist.html">Wishlist</a></li>--}}
                            {{--									<li><a href="shop-login.html">Login</a></li>--}}
                            {{--									<li><a href="shop-registration.html">Registration</a></li>--}}
                            {{--								</ul>--}}
                            {{--							</li>--}}
                            {{--							<li class="sub-menu-down"><a href="javascript:void(0);"><span>Blog</span></a>--}}
                            {{--								<ul class="sub-menu">--}}
                            {{--									<li><a href="blog-grid.html">Blog Grid</a></li>--}}
                            {{--									<li><a href="blog-large-sidebar.html">Blog Large Sidebar</a></li>--}}
                            {{--									<li><a href="blog-list-sidebar.html">Blog List Sidebar</a></li>--}}
                            {{--									<li><a href="blog-detail.html">Blog Details</a></li>--}}
                            {{--								</ul>--}}
                            {{--							</li>--}}
                            <li><a href="contact-us.html"><span>تواصل معنا</span></a></li>
                        </ul>
                        <div class="dz-social-icon">
                            <ul>
                                <li><a class="fab fa-facebook-f" target="_blank"
                                       href="https://www.facebook.com/dexignzone"></a></li>
                                <li><a class="fab fa-twitter" target="_blank"
                                       href="https://twitter.com/dexignzones"></a></li>
                                <li><a class="fab fa-linkedin-in" target="_blank"
                                       href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
                                <li><a class="fab fa-instagram" target="_blank"
                                       href="https://www.instagram.com/website_templates__/"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header End -->

    </header>
    <!-- Header End -->

    <div class="page-content bg-white">

        <!--Swiper Banner Start -->
        <div class="main-slider style-1">
            <div class="main-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-white"
                         style="background-image: url(images/background/waveElement.png);">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content">
                                            <div class="content-info">
                                                <h6 class="" data-swiper-parallax="-10">مكتبة تؤسس للمعرفة والإلهام
                                                    وتنمي القراءة </h6>
                                                <h1 class="mb-0" data-swiper-parallax="-20">نحو ثقافة تأصيلية</h1>

                                                <p class="ml-1" data-swiper-parallax="-40"
                                                   style="padding-left: 20% !important;">تهدف "المكتبة الأثرية" إلى
                                                    تطوير فهم وتقدير عميق للتقاليد والتراث، وبناء أسس قوية للتبادل
                                                    والتفاعل. يعكس هذا العنوان التزامنا بتعزيز التنوع وتعزيز حب القراءة
                                                    والمعرفة.</p>
                                            </div>
                                            {{--
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="banner-media" data-swiper-parallax="-100">
                                                                                        <img src="{{asset('frontend/images/banner/banner-media.png')}}" alt="banner-media">
                                                                                    </div>
                                                                                    <img class="pattern" src="{{asset('frontend/images/Group.png')}}" data-swiper-parallax="-100" alt="dots">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide bg-blue" style="background-image: url(images/background/waveElement.png);">
                                                                    <div class="container">
                                                                        <div class="banner-content">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="swiper-content">
                                                                                        <div class="content-info">
                                                                                            <h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
                                                                                            <h1 class="title mb-0" data-swiper-parallax="-20">Pushing Clouds</h1>
                                                                                            <ul class="dz-tags" data-swiper-parallax="-30">
                                                                                                <li><a href="javascript:void(0);">Napoleon Hill</a></li>
                                                                                                <li><a href="javascript:void(0);">Business & Strategy</a></li>
                                                                                            </ul>
                                                                                            <p class="text mb-0" data-swiper-parallax="-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                                                                            <div class="price" data-swiper-parallax="-50">
                                                                                                <span class="price-num">$9.5</span>
                                                                                                <del>$12.0</del>
                                                                                                <span class="badge badge-danger">20% OFF</span>
                                                                                            </div>
                                                                                            <div class="content-btn" data-swiper-parallax="-50">
                                                                                                <a class="btn btn-primary btnhover" href="books-grid-view.html">Buy Now</a>
                                                                                                <a class="btn border btnhover ms-4 text-white" href="books-detail.html">See Details</a>
                                                                                            </div>
                                                                                        </div>
                                            {{--											<div class="partner">--}}
                                            {{--												<p>Our partner</p>--}}
                                            {{--												<div class="brand-logo">--}}
                                            {{--													<img src="{{asset('frontend/images/partner/partner-1.png')}}" alt="client">--}}
                                            {{--													<img  class="mid-logo" src="{{asset('frontend/images/partner/partner-2.png')}}" alt="client">--}}
                                            {{--													<img src="{{asset('frontend/images/partner/partner-3.png')}}" alt="client">--}}
                                            {{--												</div>--}}
                                            {{--											</div>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="{{asset('frontend/images/banner/book4-no-background.webp')}}"
                                                 alt="banner-media1">
                                        </div>
                                        {{--										<img class="pattern" src="{{asset('frontend/images/Group.png')}}" data-swiper-parallax="-100" alt="dots">--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white"
                         style="background-image: url(images/background/waveElement.png);">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content">
                                            <div class="content-info">
                                                <h6 class="" data-swiper-parallax="-10">مكتبة إلكترونية لتطوير مهارات
                                                    القراءة وتحميل الكتب بسهولة ويسر </h6>
                                                <h1 class="mb-0" data-swiper-parallax="-20">تلخيص وتمكين</h1>

                                                <p class="ml-1" data-swiper-parallax="-40"
                                                   style="padding-left: 20% !important;">تطوير مهارات القراءة وزيادة
                                                    المعرفة من خلال ملخصات الكتب المفيدة والمفعمة بالحيوية والإلهام.</p>
                                            </div>
                                            {{--
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="banner-media" data-swiper-parallax="-100">
                                                                                        <img src="{{asset('frontend/images/banner/banner-media.png')}}" alt="banner-media">
                                                                                    </div>
                                                                                    <img class="pattern" src="{{asset('frontend/images/Group.png')}}" data-swiper-parallax="-100" alt="dots">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide bg-blue" style="background-image: url(images/background/waveElement.png);">
                                                                    <div class="container">
                                                                        <div class="banner-content">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="swiper-content">
                                                                                        <div class="content-info">
                                                                                            <h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
                                                                                            <h1 class="title mb-0" data-swiper-parallax="-20">Pushing Clouds</h1>
                                                                                            <ul class="dz-tags" data-swiper-parallax="-30">
                                                                                                <li><a href="javascript:void(0);">Napoleon Hill</a></li>
                                                                                                <li><a href="javascript:void(0);">Business & Strategy</a></li>
                                                                                            </ul>
                                                                                            <p class="text mb-0" data-swiper-parallax="-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                                                                            <div class="price" data-swiper-parallax="-50">
                                                                                                <span class="price-num">$9.5</span>
                                                                                                <del>$12.0</del>
                                                                                                <span class="badge badge-danger">20% OFF</span>
                                                                                            </div>
                                                                                            <div class="content-btn" data-swiper-parallax="-50">
                                                                                                <a class="btn btn-primary btnhover" href="books-grid-view.html">Buy Now</a>
                                                                                                <a class="btn border btnhover ms-4 text-white" href="books-detail.html">See Details</a>
                                                                                            </div>
                                                                                        </div>
                                            {{--											<div class="partner">--}}
                                            {{--												<p>Our partner</p>--}}
                                            {{--												<div class="brand-logo">--}}
                                            {{--													<img src="{{asset('frontend/images/partner/partner-1.png')}}" alt="client">--}}
                                            {{--													<img  class="mid-logo" src="{{asset('frontend/images/partner/partner-2.png')}}" alt="client">--}}
                                            {{--													<img src="{{asset('frontend/images/partner/partner-3.png')}}" alt="client">--}}
                                            {{--												</div>--}}
                                            {{--											</div>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="{{asset('frontend/images/banner/book6-no-background.webp')}}"
                                                 alt="banner-media1">
                                        </div>
                                        {{--										<img class="pattern" src="{{asset('frontend/images/Group.png')}}" data-swiper-parallax="-100" alt="dots">--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white"
                         style="background-image: url(images/background/waveElement.png);">
                        <div class="container">
                            <div class="banner-content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="swiper-content">
                                            <div class="content-info">
                                                <h6 class="" data-swiper-parallax="-10">العنوان الثانوي </h6>
                                                <h1 class="mb-0" data-swiper-parallax="-20">العنوان الرئيسي</h1>

                                                <p class="ml-1" data-swiper-parallax="-40"
                                                   style="padding-left: 20% !important;">شرح شرح شرح شرح شرح شرح شرح شرح
                                                    شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح
                                                    شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح </p>
                                            </div>
                                            {{--
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="banner-media" data-swiper-parallax="-100">
                                                                                        <img src="{{asset('frontend/images/banner/banner-media.png')}}" alt="banner-media">
                                                                                    </div>
                                                                                    <img class="pattern" src="{{asset('frontend/images/Group.png')}}" data-swiper-parallax="-100" alt="dots">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide bg-blue" style="background-image: url(images/background/waveElement.png);">
                                                                    <div class="container">
                                                                        <div class="banner-content">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="swiper-content">
                                                                                        <div class="content-info">
                                                                                            <h6 class="sub-title" data-swiper-parallax="-10">BEST SELLER</h6>
                                                                                            <h1 class="title mb-0" data-swiper-parallax="-20">Pushing Clouds</h1>
                                                                                            <ul class="dz-tags" data-swiper-parallax="-30">
                                                                                                <li><a href="javascript:void(0);">Napoleon Hill</a></li>
                                                                                                <li><a href="javascript:void(0);">Business & Strategy</a></li>
                                                                                            </ul>
                                                                                            <p class="text mb-0" data-swiper-parallax="-40">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                                                                                            <div class="price" data-swiper-parallax="-50">
                                                                                                <span class="price-num">$9.5</span>
                                                                                                <del>$12.0</del>
                                                                                                <span class="badge badge-danger">20% OFF</span>
                                                                                            </div>
                                                                                            <div class="content-btn" data-swiper-parallax="-50">
                                                                                                <a class="btn btn-primary btnhover" href="books-grid-view.html">Buy Now</a>
                                                                                                <a class="btn border btnhover ms-4 text-white" href="books-detail.html">See Details</a>
                                                                                            </div>
                                                                                        </div>
                                            {{--											<div class="partner">--}}
                                            {{--												<p>Our partner</p>--}}
                                            {{--												<div class="brand-logo">--}}
                                            {{--													<img src="{{asset('frontend/images/partner/partner-1.png')}}" alt="client">--}}
                                            {{--													<img  class="mid-logo" src="{{asset('frontend/images/partner/partner-2.png')}}" alt="client">--}}
                                            {{--													<img src="{{asset('frontend/images/partner/partner-3.png')}}" alt="client">--}}
                                            {{--												</div>--}}
                                            {{--											</div>--}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="banner-media" data-swiper-parallax="-100">
                                            <img src="{{asset('frontend/images/banner/book7-no-background.webp')}}"
                                                 alt="banner-media1">
                                        </div>
                                        {{--										<img class="pattern" src="{{asset('frontend/images/Group.png')}}" data-swiper-parallax="-100" alt="dots">--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container swiper-pagination-wrapper">
                    <div class="swiper-pagination-five"></div>
                </div>
            </div>
            <div class="swiper main-swiper-thumb">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        {{--						<div class="books-card">--}}
                        {{--							<div class="dz-media">--}}
                        {{--								<img src="{{asset('frontend/images/books/book16.png')}}" alt="book">--}}
                        {{--							</div>--}}
                        {{--							<div class="dz-content">--}}
                        {{--								<h5 class="title mb-0">Think and Grow Rich</h5>--}}
                        {{--								<div class="dz-meta">--}}
                        {{--									<ul>--}}
                        {{--										<li>by Napoleon Hill</li>--}}
                        {{--									</ul>--}}
                        {{--								</div>--}}
                        {{--								<div class="book-footer">--}}
                        {{--									<div class="price">--}}
                        {{--										<span class="price-num">$9.5</span>--}}
                        {{--									</div>--}}
                        {{--									<div class="rate">--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--									</div>--}}
                        {{--								</div>--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                    </div>
                    <div class="swiper-slide">
                        {{--						<div class="books-card">--}}
                        {{--							<div class="dz-media">--}}
                        {{--								<img src="{{asset('frontend/images/books/grid/book9.jpg')}}" alt="book">--}}
                        {{--							</div>--}}
                        {{--							<div class="dz-content">--}}
                        {{--								<h5 class="title mb-0">Pushing Clouds</h5>--}}
                        {{--								<div class="dz-meta">--}}
                        {{--									<ul>--}}
                        {{--										<li>by Jamet Sigh</li>--}}
                        {{--									</ul>--}}
                        {{--								</div>--}}
                        {{--								<div class="book-footer">--}}
                        {{--									<div class="price">--}}
                        {{--										<span class="price-num">$5.7</span>--}}
                        {{--									</div>--}}
                        {{--									<div class="rate">--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-muted"></i>--}}
                        {{--									</div>--}}
                        {{--								</div>--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                    </div>
                    <div class="swiper-slide">
                        {{--						<div class="books-card">--}}
                        {{--							<div class="dz-media">--}}
                        {{--								<img src="{{asset('frontend/images/books/book16.png')}}" alt="book">--}}
                        {{--							</div>--}}
                        {{--							<div class="dz-content">--}}
                        {{--								<h5 class="title mb-0">Think and Grow Rich</h5>--}}
                        {{--								<div class="dz-meta">--}}
                        {{--									<ul>--}}
                        {{--										<li>by Napoleon Hill</li>--}}
                        {{--									</ul>--}}
                        {{--								</div>--}}
                        {{--								<div class="book-footer">--}}
                        {{--									<div class="price">--}}
                        {{--										<span class="price-num">$9.5</span>--}}
                        {{--									</div>--}}
                        {{--									<div class="rate">--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--									</div>--}}
                        {{--								</div>--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                    </div>
                    <div class="swiper-slide">
                        {{--						<div class="books-card">--}}
                        {{--							<div class="dz-media">--}}
                        {{--								<img src="{{asset('frontend/images/books/grid/book9.jpg')}}" alt="book">--}}
                        {{--							</div>--}}
                        {{--							<div class="dz-content">--}}
                        {{--								<h5 class="title mb-0">Pushing Clouds</h5>--}}
                        {{--								<div class="dz-meta">--}}
                        {{--									<ul>--}}
                        {{--										<li>by Jamet Sigh</li>--}}
                        {{--									</ul>--}}
                        {{--								</div>--}}
                        {{--								<div class="book-footer">--}}
                        {{--									<div class="price">--}}
                        {{--										<span class="price-num">$5.7</span>--}}
                        {{--									</div>--}}
                        {{--									<div class="rate">--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-yellow"></i>--}}
                        {{--										<i class="flaticon-star text-muted"></i>--}}
                        {{--									</div>--}}
                        {{--								</div>--}}
                        {{--							</div>--}}
                        {{--						</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!--Swiper Banner End-->

        {{--		<!-- Client Start-->--}}
        {{--		<div class="bg-white py-5">--}}
        {{--			<div class="container">--}}
        {{--			<!--Client Swiper -->--}}
        {{--				<div class="swiper client-swiper">--}}
        {{--					<div class="swiper-wrapper">--}}
        {{--						<div class="swiper-slide"><img src="{{asset('frontend/images/client/client1.svg')}}" alt="client"></div>--}}
        {{--						<div class="swiper-slide"><img src="{{asset('frontend/images/client/client2.svg')}}" alt="client"></div>--}}
        {{--						<div class="swiper-slide"><img src="{{asset('frontend/images/client/client3.svg')}}" alt="client"></div>--}}
        {{--						<div class="swiper-slide"><img src="{{asset('frontend/images/client/client4.svg')}}" alt="client"></div>--}}
        {{--						<div class="swiper-slide"><img src="{{asset('frontend/images/client/client5.svg')}}" alt="client"></div>--}}
        {{--					</div>--}}
        {{--				</div>--}}
        {{--			</div>--}}
        {{--		</div>--}}
        {{--		<!-- Client End-->--}}

        <!--Recommend Section Start-->
        <section class="content-inner-1 bg-grey reccomend">

            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">كتب للتحميل</h2>
                </div>
                <!-- Swiper -->
                <div class="swiper-container swiper-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/al-resalah.webp')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <div class="row" style="max-width: 100%">
                                        <h4 class="title">الرسالة</h4>
                                        <span class="price">للأمام الشافعي</span>
                                        <p class="ml-1">
                                            يعد كتاب الرسالة للشافعي منقه الإسلامي، ويشتمل على
                                            بيانات مبسطة ومهمة.
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-secondary btnhover2"><i class="fa fa-download m-r10" style="padding-left: 10% !important;"></i>
                                        تحميل</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/al-resalah.webp')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <div class="row">
                                        <h4 class="title">الرسالة</h4>
                                        <span class="price">للأمام الشافعي</span>
                                        <p class="ml-1" style="width: 100%">
                                            يعد كتاب الرسالة للشافعي من أهم المؤلفات في الفقه الإسلامي، ويشتمل على
                                            بيانات مبسطة ومهمة.
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-secondary btnhover2"><i class="fa fa-download m-r10"
                                                                                       style="padding-left: 10% !important;"></i>
                                        تحميل</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <div class="text-center">
                            <a class="btn btn-primary"> المزيد.... </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="content-inner overlay-white-middle">
            <div class="container">
            <div class="row about-style1 align-items-center">
                <div class="col-lg-6 m-b30">
                    <div class="row sp10 about-thumb">
                        <div class="col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="split-box">
                                <div>
                                    <img class="m-b30" src="{{asset('frontend/images/logo.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="split-box ">
                                <div>
                                    <img class="m-b20 aos-item" src="{{asset('frontend/images/books/large/about-us.webp')}}" alt="" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                                </div>
                            </div>
                            <div class="exp-bx aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                                <div class="exp-head">
                                    <div class="counter-num">
                                        <h2><span class="counter">100</span><small>+</small></h2>
                                    </div>
                                    <h6 class="title"> التعريف بالمكتبة</h6>
                                </div>
                                <div class="exp-info mt-5">
                                    <ul class="list-check primary">
                                        <li  style="text-align: left !important;direction: ltr !important;">كتب اسلامية </li>
                                        <li  style="text-align: left !important;direction: ltr !important;">كتب ثقافية</li>
                                        <li  style="text-align: left !important;direction: ltr !important;">كتب تاريخية</li>
                                        <li  style="text-align: left !important;direction: ltr !important;">كتب نحوية</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div class="about-content px-lg-4">
                        <div class="section-head style-1">
                            <h2 class="title">التعريف بالمكتبة</h2>
                            <p>تعنى المكتبة بنشر العلم الشرعي من خلال نشر المتون والكتب العلمية النافعة كملفات رقمية مقسمة تقسيما موضوعيا عبر الموقع الالكتروني للمكتبة على شبكة الإنترنت، ليتمكن طلبة العلم من
                                البحث والوصول إلى كمية كبيرة من الكتب المتقدمة والمعاصرة في مختلف الفنون بسهولة بالغة. كما ويتبع للمكتبة مركز متخصص بالبحوث والدراسات العلمية تصدر عنه مجلة بإسم: مجلة
                                العلوم الأثرية، وهي . مجلة علمية محكمة تصدر دوريا بصيغة إلكترونية وأخرى ورقية. </p>
                        </div>
                        <a href="" class="btn btn-primary btnhover shadow-primary">تواصل معنا الان</a>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- icon-box1 -->
        <section class="content-inner-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-1 m-b30 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-power icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Quick Delivery</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-1 m-b30 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-shield icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Secure Payment</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-1 m-b30 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-like icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Best Quality</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-1 m-b30 text-center">
                            <div class="icon-bx-sm m-b10">
                                <i class="flaticon-star icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h5 class="dz-title m-b10">Return Guarantee</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- icon-box1 End-->

        <!-- Book Sale -->
        <section class="content-inner-1">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Books on Sale</h2>
                    <div class="pagination-align style-1">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-two"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="swiper-container books-wrapper-3 swiper-four">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/book5.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Take Out Tango</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/book11.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/book7.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Seconds [PART 1]</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/book12.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">The Missadventure</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/grid/book15.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Terrible Madness</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-3 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <img src="{{assert('frontend/images/books/grid/book3.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h5 class="title"><a href="books-grid-view.html">Battle Drive</a></h5>
                                    <ul class="dz-tags">
                                        <li><a href="books-grid-view.html">SPORTS,</a></li>
                                        <li><a href="books-grid-view.html">DRAMA</a></li>
                                    </ul>
                                    <div class="book-footer">
                                        <div class="rate">
                                            <i class="flaticon-star"></i> 6.8
                                        </div>
                                        <div class="price">
                                            <span class="price-num">$9.5</span>
                                            <del>$12.0</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book Sale End -->

        <!-- Feature Product -->
        <section class="content-inner-1 bg-grey reccomend">
            <div class="container">
                <div class="section-head text-center">
                    <div class="circle style-1"></div>
                    <h2 class="title">Featured Product</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris </p>
                </div>
            </div>
            <div class="container">
                <div class="swiper-container books-wrapper-2 swiper-three">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/large/bigbook1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/large/bigbook2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/large/bigbook1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/large/bigbook2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/large/bigbook1.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="books-card style-2">
                                <div class="dz-media">
                                    <img src="{{asset('frontend/images/books/large/bigbook2.jpg')}}" alt="book">
                                </div>
                                <div class="dz-content">
                                    <h6 class="sub-title">BEST SELLER</h6>
                                    <h2 class="title">A Heavy LIft</h2>
                                    <ul class="dz-tags">
                                        <li>Napoleon Hill</li>
                                        <li>Business & Strategy</li>
                                    </ul>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris </p>
                                    <div class="price">
                                        <span class="price-num">$9.5</span>
                                        <del>$12.0</del>
                                        <span class="badge">20% OFF</span>
                                    </div>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
                                            Now</a>
                                        <a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-align style-2">
                        <div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="swiper-pagination-three"></div>
                        <div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Product End -->

        <!-- Special Offer-->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head book-align">
                    <h2 class="title mb-0">Special Offers</h2>
                    <div class="pagination-align style-1">
                        <div class="book-button-prev swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="book-button-next swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                <div class="swiper-container book-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('frontend/images/blog/blog5.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
                                    <div class="dz-meta">
                                        <ul class="dz-tags">
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('frontend/images/blog/blog6.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('frontend/images/blog/blog7.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('frontend/images/blog/blog5.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">SECONDS [Part I]</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('frontend/images/blog/blog6.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">Terrible Madness</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <a href="books-detail.html"><img src="{{asset('frontend/images/blog/blog7.jpg')}}"
                                                                     alt="/"></a>
                                </div>
                                <div class="dz-info">
                                    <h4 class="dz-title"><a href="books-detail.html">REWORK</a></h4>
                                    <div class="dz-tags">
                                        <ul>
                                            <li><a href="books-detail.html">BIOGRAPHY</a></li>
                                            <li><a href="books-detail.html">THRILLER</a></li>
                                            <li><a href="books-detail.html">HORROR</a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.</p>
                                    <div class="bookcard-footer">
                                        <a href="shop-cart.html" class="btn btn-primary m-t15 btnhover2"><i
                                                class="flaticon-shopping-cart-1 m-r10"></i> Add to cart</a>
                                        <div class="price-details">
                                            $18,78
                                            <del>$25</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Offer End -->

        <!-- Testimonial -->
        <section class="content-inner-2 testimonial-wrapper">
            <div class="container">
                <div class="testimonial">
                    <div class="section-head book-align">
                        <div>
                            <h2 class="title mb-0">Testimonials</h2>
                            <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                        <div class="pagination-align style-1">
                            <div class="testimonial-button-prev swiper-button-prev"><i
                                    class="fa-solid fa-angle-left"></i></div>
                            <div class="testimonial-button-next swiper-button-next"><i
                                    class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-container testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('frontend/images/testimonial/testimonial1.jpg')}}" alt="">
                                    </div>
                                    <div class="info-right">
                                        <h6 class="testimonial-name">Jason Huang</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('frontend/images/testimonial/testimonial2.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Miranda Lee</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('frontend/images/testimonial/testimonial3.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Steve Henry</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Thank you for filling a niche at an affordable price. Your book was just what I
                                        was looking for. Thanks again</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('frontend/images/testimonial/testimonial4.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Angela Moss</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic radius">
                                        <img src="{{asset('frontend/images/testimonial/testimonial2.jpg')}}" alt="">
                                    </div>
                                    <div>
                                        <h6 class="testimonial-name">Miranda Lee</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-1 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="testimonial-info">
                                <ul class="dz-rating">
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-yellow"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                    <li><i class="flaticon-star text-muted"></i></li>
                                </ul>
                                <div class="testimonial-text">
                                    <p>Very impresive store. Your book made studying for the ABC certification exams a
                                        breeze. Thank you very much</p>
                                </div>
                                <div class="testimonial-detail">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('frontend/images/testimonial/testimonial1.jpg')}}" alt="">
                                    </div>
                                    <div class="info-right">
                                        <h6 class="testimonial-name">Jason Huang</h6>
                                        <span class="testimonial-position">Book Lovers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->

        <!-- Latest News -->
        <section class="content-inner-2">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="title">Latest News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua</p>
                </div>
                <div class="swiper-container blog-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img
                                            src="{{assert('frontend/images/blog/grid/blog4.jpg')}}" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy,
                                            Intelligent</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>24 March,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img
                                            src="{{asset('frontend/images/blog/grid/blog3.jpg')}}" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">10 Things you must know to improve your reading
                                            skills</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>18 July,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img
                                            src="{{asset('frontend/images/blog/grid/blog2.jpg')}}" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">Benefits of reading: Smart, Diligent, Happy,
                                            Intelligent</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>7 June,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-blog style-1 bg-white m-b30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="blog-detail.html"><img
                                            src="{{asset('frontend/images/blog/grid/blog1.jpg')}}" alt="/"></a>
                                </div>
                                <div class="dz-info p-3">
                                    <h6 class="dz-title">
                                        <a href="blog-detail.html">We Must know why reading is important for
                                            children?</a>
                                    </h6>
                                    <p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing do eiusmod
                                        tempor</p>
                                    <div class="dz-meta meta-bottom mt-3 pt-3">
                                        <ul class="">
                                            <li class="post-date"><i class="far fa-calendar fa-fw m-r10"></i>30 May,
                                                2022
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest News End -->

        <!-- Feature Box -->
        <section class="content-inner">
            <div class="container">
                <div class="row sp15">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-users icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">125,663</h2>
                                <p class="font-20">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-book icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">50,672</h2>
                                <p class="font-20">Book Collections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-store icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">1,562</h2>
                                <p class="font-20">Our Stores</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-bx-wraper style-2 m-b30 text-center">
                            <div class="icon-bx-lg">
                                <i class="fa-solid fa-leaf icon-cell"></i>
                            </div>
                            <div class="icon-content">
                                <h2 class="dz-title counter m-b0">457</h2>
                                <p class="font-20">Famous Writers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature Box End -->

        <!-- Newsletter -->
        <section class="py-5 newsletter-wrapper"
                 style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
            <div class="container">
                <div class="subscride-inner">
                    <div
                        class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                        <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="section-head mb-0">
                                <h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
                                    updates</h2>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <form class="dzSubscribe style-1" action="script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <input name="dzEmail" required="required" type="email"
                                               class="form-control bg-transparent text-white"
                                               placeholder="Your Email Address">
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit"
                                                    class="btn btn-primary btnhover">
                                                <span>SUBSCRIBE</span>
                                                <i class="fa-solid fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter End -->

    </div>

    <!-- Footer -->
    <footer class="site-footer style-1">
        <!-- Footer Category -->
        <div class="footer-category">
            <div class="container">
                <div class="category-toggle">
                    <a href="javascript:void(0);" class="toggle-btn">Books categories</a>
                    <div class="toggle-items row">
                        <div class="footer-col-book">
                            <ul>
                                <li><a href="books-grid-view.html">Architecture</a></li>
                                <li><a href="books-grid-view.html">Art</a></li>
                                <li><a href="books-grid-view.html">Action</a></li>
                                <li><a href="books-grid-view.html">Biography</a></li>
                                <li><a href="books-grid-view.html">Body, Mind & Spirit</a></li>
                                <li><a href="books-grid-view.html">Business & Economics</a></li>
                                <li><a href="books-grid-view.html">Children Fiction</a></li>
                                <li><a href="books-grid-view.html">Children Non-Fiction</a></li>
                                <li><a href="books-grid-view.html">Comics & Graphics</a></li>
                                <li><a href="books-grid-view.html">Cooking</a></li>
                                <li><a href="books-grid-view.html">Crafts & Hobbies</a></li>
                                <li><a href="books-grid-view.html">Design</a></li>
                                <li><a href="books-grid-view.html">Drama</a></li>
                                <li><a href="books-grid-view.html">Education</a></li>
                                <li><a href="books-grid-view.html">Family & Relationships</a></li>
                                <li><a href="books-grid-view.html">Fiction</a></li>
                                <li><a href="books-grid-view.html">Foreign Language</a></li>
                                <li><a href="books-grid-view.html">Games</a></li>
                                <li><a href="books-grid-view.html">Gardening</a></li>
                                <li><a href="books-grid-view.html">Health & Fitness</a></li>
                                <li><a href="books-grid-view.html">History</a></li>
                                <li><a href="books-grid-view.html">House & الصفحة الرئيسية</a></li>
                                <li><a href="books-grid-view.html">Humor</a></li>
                                <li><a href="books-grid-view.html">Literary Collections</a></li>
                                <li><a href="books-grid-view.html">Mathematics</a></li>
                                <li><a href="books-grid-view.html">Medical</a></li>
                                <li><a href="books-grid-view.html">Nature</a></li>
                                <li><a href="books-grid-view.html">Performing Arts</a></li>
                                <li><a href="books-grid-view.html">Pets</a></li>
                                <li><a href="books-grid-view.html">Show others</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Category End -->

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="widget widget_about">
                            <div class="footer-logo logo-white">
                                <a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
                            </div>
                            <p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem
                                ipsum dolor sit</p>
                            <div class="dz-social-icon style-1">
                                <ul>
                                    <li><a href="https://www.facebook.com/dexignzone" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g"
                                           target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i
                                                class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="widget widget_services">
                            <h5 class="footer-title">Our Links</h5>
                            <ul>
                                <li><a href="about-us.html">من نحن</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="pricing.html">Pricing Table</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="widget widget_services">
                            <h5 class="footer-title">Bookland ?</h5>
                            <ul>
                                <li><a href="#">Bookland</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Book Details</a></li>
                                <li><a href="#">Blog Details</a></li>
                                <li><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="widget widget_services">
                            <h5 class="footer-title">Resources</h5>
                            <ul>
                                <li><a href="services.html">Download</a></li>
                                <li><a href="help-desk.html">Help Center</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="shop-login.html">Login</a></li>
                                <li><a href="about-us.html">Partner</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="widget widget_getintuch">
                            <h5 class="footer-title">Get in Touch With Us</h5>
                            <ul>
                                <li>
                                    <i class="flaticon-placeholder"></i>
                                    <span>832  Thompson Drive, San Fransisco CA 94107,US</span>
                                </li>
                                <li>
                                    <i class="flaticon-phone"></i>
                                    <span>+123 345123 556<br>
									+123 345123 556</span>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <span>support@bookland.id<br>
									info@bookland.id</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row fb-inner">
                    <div class="col-lg-6 col-md-12 text-start">
                        <p class="copyright-text">Bookland Book Store Ecommerce Website - © 2022 All Rights Reserved</p>
                    </div>
                    <div class="col-lg-6 col-md-12 text-end">
                        <p>Made with <span class="heart"></span> by <a href="https://dexignzone.com/">DexignZone</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

    </footer>
    <!-- Footer End -->

    <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script><!-- JQUERY MIN JS -->
<script src="{{asset('frontend/vendor/wow/wow.min.js')}}"></script><!-- WOW JS -->
<script src="{{asset('frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{asset('frontend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{asset('frontend/vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('frontend/vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
<script src="{{asset('frontend/js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
<script src="{{asset('frontend/js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('frontend/js/custom.js')}}"></script><!-- CUSTOM JS -->
</body>
</html>
