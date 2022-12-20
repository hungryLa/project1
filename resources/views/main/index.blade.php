@extends('layouts.main')

@section('title')Titan | Multipurpose HTML5 Template @endsection

@section('content')
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.html">Titan</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index_mp_fullscreen_video_background.html">Default</a></li>
                            <li><a href="index_op_fullscreen_gradient_overlay.html">One Page</a></li>
                            <li><a href="index_agency.html">Agency</a></li>
                            <li><a href="index_portfolio.html">Portfolio</a></li>
                            <li><a href="index_restaurant.html">Restaurant</a></li>
                            <li><a href="index_finance.html">Finance</a></li>
                            <li><a href="index_landing.html">Landing Page</a></li>
                            <li><a href="index_photography.html">Photography</a></li>
                            <li><a href="index_shop.html">Shop</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Headers</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Static Image Header</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_mp_fullscreen_static.html">Fulscreen</a></li>
                                    <li><a href="index_mp_classic_static.html">Classic</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Flexslider Header</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_mp_fullscreen_flexslider.html">Fulscreen</a></li>
                                    <li><a href="index_mp_classic_flexslider.html">Classic</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Video Background Header</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_mp_fullscreen_video_background.html">Fulscreen</a></li>
                                    <li><a href="index_mp_classic_video_background.html">Classic</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Text Rotator Header</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_mp_fullscreen_text_rotator.html">Fulscreen</a></li>
                                    <li><a href="index_mp_classic_text_rotator.html">Classic</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gradient Overlay Header</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index_mp_fullscreen_gradient_overlay.html">Fulscreen</a></li>
                                    <li><a href="index_mp_classic_gradient_overlay.html">Classic</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about1.html">About 1</a></li>
                                    <li><a href="about2.html">About 2</a></li>
                                    <li><a href="about3.html">About 3</a></li>
                                    <li><a href="about4.html">About 4</a></li>
                                    <li><a href="about5.html">About 5</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="service1.html">Service 1</a></li>
                                    <li><a href="service2.html">Service 2</a></li>
                                    <li><a href="service3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pricing</a>
                                <ul class="dropdown-menu">
                                    <li><a href="pricing1.html">Pricing 1</a></li>
                                    <li><a href="pricing2.html">Pricing 2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery</a>
                                <ul class="dropdown-menu">
                                    <li><a href="gallery_col_2.html">2 Columns</a></li>
                                    <li><a href="gallery_col_3.html">3 Columns</a></li>
                                    <li><a href="gallery_col_4.html">4 Columns</a></li>
                                    <li><a href="gallery_col_6.html">6 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact1.html">Contact 1</a></li>
                                    <li><a href="contact2.html">Contact 2</a></li>
                                    <li><a href="contact3.html">Contact 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Restaurant menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="restaurant_menu1.html">Menu 2 Columns</a></li>
                                    <li><a href="restaurant_menu2.html">Menu 3 Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="login_register.html">Login / Register</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">Page 404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Portfolio</a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_boxed_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_boxed_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_boxed_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed - Gutter</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_boxed_gutter_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_boxed_gutter_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_boxed_gutter_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_full_width_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_full_width_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width - Gutter</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_gutter_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_full_width_gutter_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_full_width_gutter_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_masonry_boxed_col_2.html">2 Columns</a></li>
                                            <li><a href="portfolio_masonry_boxed_col_3.html">3 Columns</a></li>
                                            <li><a href="portfolio_masonry_boxed_col_4.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_masonry_full_width_col_2.html">2 Columns</a></li>
                                            <li><a href="portfolio_masonry_full_width_col_3.html">3 Columns</a></li>
                                            <li><a href="portfolio_masonry_full_width_col_4.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hover Style</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_hover_black.html">Black</a></li>
                                    <li><a href="portfolio_hover_gradient.html">Gradient</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Image</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_image1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_image2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Slider</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_slider1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_slider2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Video</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_video1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_video2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Standard</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_standard_left_sidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog_standard_right_sidebar.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_grid_col_2.html">2 Columns</a></li>
                                    <li><a href="blog_grid_col_3.html">3 Columns</a></li>
                                    <li><a href="blog_grid_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_grid_masonry_col_2.html">2 Columns</a></li>
                                    <li><a href="blog_grid_masonry_col_3.html">3 Columns</a></li>
                                    <li><a href="blog_grid_masonry_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog_single_left_sidebar.html">Left Sidebar</a></li>
                                    <li><a href="blog_single_right_sidebar.html">Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Features</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="alerts-and-wells.html"><i class="fa fa-bolt"></i> Alerts and Wells</a></li>
                            <li><a href="buttons.html"><i class="fa fa-link fa-sm"></i> Buttons</a></li>
                            <li><a href="tabs_and_accordions.html"><i class="fa fa-tasks"></i> Tabs &amp; Accordions</a></li>
                            <li><a href="content_box.html"><i class="fa fa-list-alt"></i> Contents Box</a></li>
                            <li><a href="forms.html"><i class="fa fa-check-square-o"></i> Forms</a></li>
                            <li><a href="icons.html"><i class="fa fa-star"></i> Icons</a></li>
                            <li><a href="progress-bars.html"><i class="fa fa-server"></i> Progress Bars</a></li>
                            <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Shop</a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Product</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop_product_col_3.html">3 columns</a></li>
                                    <li><a href="shop_product_col_4.html">4 columns</a></li>
                                </ul>
                            </li>
                            <li><a href="shop_single_product.html">Single Product</a></li>
                            <li><a href="shop_checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <!--li.dropdown.navbar-cart-->
                    <!--    a.dropdown-toggle(href='#', data-toggle='dropdown')-->
                    <!--        span.icon-basket-->
                    <!--        |-->
                    <!--        span.cart-item-number 2-->
                    <!--    ul.dropdown-menu.cart-list(role='menu')-->
                    <!--        li-->
                    <!--            .navbar-cart-item.clearfix-->
                    <!--                .navbar-cart-img-->
                    <!--                    a(href='#')-->
                    <!--                        img(src='assets/images/shop/product-9.jpg', alt='')-->
                    <!--                .navbar-cart-title-->
                    <!--                    a(href='#') Short striped sweater-->
                    <!--                    |-->
                    <!--                    span.cart-amount 2 &times; $119.00-->
                    <!--                    br-->
                    <!--                    |-->
                    <!--                    strong.cart-amount $238.00-->
                    <!--        li-->
                    <!--            .navbar-cart-item.clearfix-->
                    <!--                .navbar-cart-img-->
                    <!--                    a(href='#')-->
                    <!--                        img(src='assets/images/shop/product-10.jpg', alt='')-->
                    <!--                .navbar-cart-title-->
                    <!--                    a(href='#') Colored jewel rings-->
                    <!--                    |-->
                    <!--                    span.cart-amount 2 &times; $119.00-->
                    <!--                    br-->
                    <!--                    |-->
                    <!--                    strong.cart-amount $238.00-->
                    <!--        li-->
                    <!--            .clearfix-->
                    <!--                .cart-sub-totle-->
                    <!--                    strong Total: $476.00-->
                    <!--        li-->
                    <!--            .clearfix-->
                    <!--                a.btn.btn-block.btn-round.btn-font-w(type='submit') Checkout-->
                    <!--li.dropdown-->
                    <!--    a.dropdown-toggle(href='#', data-toggle='dropdown') Search-->
                    <!--    ul.dropdown-menu(role='menu')-->
                    <!--        li-->
                    <!--            .dropdown-search-->
                    <!--                form(role='form')-->
                    <!--                    input.form-control(type='text', placeholder='Search...')-->
                    <!--                    |-->
                    <!--                    button.search-btn(type='submit')-->
                    <!--                        i.fa.fa-search-->
                    <li class="dropdown"><a class="dropdown-toggle" href="documentation.html" data-toggle="dropdown">Documentation</a>
                        <ul class="dropdown-menu">
                            <li><a href="documentation.html#contact">Contact Form</a></li>
                            <li><a href="documentation.html#reservation">Reservation Form</a></li>
                            <li><a href="documentation.html#mailchimp">Mailchimp</a></li>
                            <li><a href="documentation.html#gmap">Google Map</a></li>
                            <li><a href="documentation.html#plugin">Plugins</a></li>
                            <li><a href="documentation.html#changelog">Changelog</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider1.png&quot;);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1">This is Titan</div>
                            <div class="font-alt mb-30 titan-title-size-4"> Summer 2017</div>
                            <div class="font-alt mb-40 titan-title-size-1">Your online fashion destination</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                        </div>
                    </div>
                </li>
                <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;assets/images/shop/slider3.png&quot;);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1"> This is Titan</div>
                            <div class="font-alt mb-40 titan-title-size-4">Exclusive products</div><a class="section-scroll btn btn-border-w btn-round" href="#latest">Learn More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="main">
        <section class="module-small">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Latest in clothing</h2>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-7.jpg" alt="Accessories Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-8.jpg" alt="Men’s Casual Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-9.jpg" alt="Men’s Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-10.jpg" alt="Cold Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-11.jpg" alt="Accessories Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Accessories Pack</a></h4>£9.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-12.jpg" alt="Men’s Casual Pack"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Casual Pack</a></h4>£12.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-13.jpg" alt="Men’s Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Men’s Garb</a></h4>£6.00
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="shop-item">
                            <div class="shop-item-image"><img src="assets/images/shop/product-14.jpg" alt="Cold Garb"/>
                                <div class="shop-item-detail"><a class="btn btn-round btn-b"><span class="icon-basket">Add To Cart</span></a></div>
                            </div>
                            <h4 class="shop-item-title font-alt"><a href="#">Cold Garb</a></h4>£14.00
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="#">See all products</a></div>
                </div>
            </div>
        </section>
        <section class="module module-video bg-dark-30" data-background="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt mb-0">Be inspired. Get ahead of trends.</h2>
                    </div>
                </div>
            </div>
            <div class="video-player" data-property="{videoURL:'https://www.youtube.com/watch?v=EMy5krGcoOU', containment:'.module-video', startAt:0, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
        </section>
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Exclusive products</h2>
                        <div class="module-subtitle font-serif">The languages only differ in their grammar, their pronunciation and their most common words.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-1.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£12.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-2.jpg" alt="Derby shoes"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Derby shoes</a></h4>£54.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-3.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-4.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£14.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-5.jpg" alt="Chelsea boots"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Chelsea boots</a></h4>£44.00
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="ex-product"><a href="#"><img src="assets/images/shop/product-6.jpg" alt="Leather belt"/></a>
                                    <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£19.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Our News</h2>
                    </div>
                </div>
                <div class="row multi-columns-row post-columns wo-border">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">New lookbook</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="post mb-40">
                            <div class="post-header font-alt">
                                <h2 class="post-title"><a href="#">New lookbook</a></h2>
                            </div>
                            <div class="post-entry">
                                <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
            <div class="container">
                <div class="row client">
                    <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-1.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-2.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-3.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-4.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-5.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-1.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-2.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-3.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="col-sm-12">
                                <div class="client-logo"><img src="assets/images/client-logo-dark-4.png" alt="Client Logo"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">About Titan</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>Phone: +1 234 567 89 10</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">somecompany@example.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Recent Comments</h5>
                            <ul class="icon-list">
                                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                                <li>John on <a href="#">Realistic Business Card Mockup</a></li>
                                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                                <li>Jack on <a href="#">Bottle Mockup</a></li>
                                <li>Mark on <a href="#">Our trip to the Alps</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Blog Categories</h5>
                            <ul class="icon-list">
                                <li><a href="#">Photography - 7</a></li>
                                <li><a href="#">Web Design - 3</a></li>
                                <li><a href="#">Illustration - 12</a></li>
                                <li><a href="#">Marketing - 1</a></li>
                                <li><a href="#">Wordpress - 16</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Popular Posts</h5>
                            <ul class="widget-posts">
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Designer Desk Essentials</a></div>
                                        <div class="widget-posts-meta">23 january</div>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="widget-posts-image"><a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail"/></a></div>
                                    <div class="widget-posts-body">
                                        <div class="widget-posts-title"><a href="#">Realistic Business Card Mockup</a></div>
                                        <div class="widget-posts-meta">15 February</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
@endsection
