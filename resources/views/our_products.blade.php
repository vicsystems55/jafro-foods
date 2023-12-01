@extends('layout')
@section('content')


        <!--====== Start Breadcrumb Section ======-->
        <section class="page-banner light-red-bg p-r z-1 bg_cover" style="background-image: url(assets/images/bg/page-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-banner-content text-center wow fadeInDown">
                            <h1 class="page-title">Our Products</h1>
                            <ul class="breadcrumb-link text-white">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Our Products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->

<section class="product-shop-section pt-130 pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="products-sidebar-area">
                    <!--=== Product Search Widget ===-->
                    <div class="sidebar-widget product-search-widget mb-45 wow fadeInUp">
                        <h4 class="widget-title">Search</h4>
                        <form>
                            <div class="form_group">
                                <label><i class="fas fa-search"></i></label>
                                <input type="text" class="form_control" placeholder="Search" name="search" required>
                            </div>
                        </form>
                    </div>
                    <!--=== Product Category Widget ===-->
                    <div class="sidebar-widget product-category-widget mb-40 wow fadeInUp">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="category-nav">
                            <li><a href="#">Coconut Flavor<span class="dot-border"></span><span class="number">08</span></a></li>
                            <li><a href="#">Peanut Flavor<span class="dot-border"></span><span class="number">03</span></a></li>
                            <li><a href="#">Basic Flavor<span class="dot-border"></span><span class="number">15</span></a></li>

                        </ul>
                    </div>
                    <!--=== Price Range Widget ===-->
                    <div class="sidebar-widget price-range-widget mb-35 wow fadeInUp">
                        <h4 class="widget-title">Price</h4>
                        <div id="slider-range"></div>
                        <div class="price-number">
                            <span class="amount">Price <input type="text" id="amount"></span>
                        </div>
                    </div>
                    <!--=== Recent Product Widget ===-->
                    <div class="sidebar-widget recent-products-widget mb-45 wow fadeInUp d-none">
                        <h4 class="widget-title">Products <span class="line"></span></h4>
                        <ul class="product-list">
                            <li class="product-item d-flex align-items-center">
                                <div class="thumb">
                                    <img src="assets/images/product/thumb-1.jpg" alt="">
                                </div>
                                <div class="info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h6><a href="product-details.html">Vegetable Hamburger</a></h6>
                                    {{-- <span class="price"><span class="curreny"> £</span>58.63</span> --}}
                                </div>
                            </li>
                            <li class="product-item d-flex align-items-center">
                                <div class="thumb">
                                    <img src="assets/images/product/thumb-2.jpg" alt="">
                                </div>
                                <div class="info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h6><a href="product-details.html">Italian Chicken Pizza</a></h6>
                                    {{-- <span class="price"><span class="curreny"> £</span>83.25</span> --}}
                                </div>
                            </li>
                            <li class="product-item d-flex align-items-center">
                                <div class="thumb">
                                    <img src="assets/images/product/thumb-3.jpg" alt="">
                                </div>
                                <div class="info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h6><a href="product-details.html">Crab Seafood sauce</a></h6>
                                    {{-- <span class="price"><span class="curreny"> £</span>83.25</span> --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--=== Product Tag Widget ===-->
                    <div class="sidebar-widget product-tag-cloud mb-45 wow fadeInUp d-none">
                        <h4 class="widget-title">Popular Tags <span class="line"></span></h4>
                        <a href="#">Restaurant</a>
                        <a href="#">Seafoods</a>
                        <a href="#">Burger</a>
                        <a href="#">Pizza</a>
                        <a href="#">Soup</a>
                        <a href="#">Crap</a>
                        <a href="#">Juice</a>
                        <a href="#">Bread</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="product-search-filter wow fadeInUp mb-30">
                    <form>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="show-text mb-15 wow fadeInLeft">
                                    <p>Showing all results</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="filter-category float-md-end wow fadeInRight mb-15">
                                    <ul>
                                        {{-- <li><a href="products.html"><i class="far fa-list"></i></a></li>
                                        <li><a href="products.html"><i class="far fa-th"></i></a></li> --}}
                                        <li>
                                            <select class="wide">
                                                <option data-display="Default Shorting">Default Shorting</option>
                                                <option value="01">Price High To Low</option>
                                                <option value="02">Price Low To High</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="products-wrapper">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6 col-sm-6">
                            <div class="single-product-item text-center wow fadeInUp mb-30">
                                <div class="product-thumbnail">
                                    <img src="assets/images/product/menu-5.png" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="title"><a href="product-details.html">Chin Chin</a></h3>
                                    {{-- <span class="price"><span class="curreny"> £</span>23.59</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6 col-sm-6">
                            <div class="single-product-item text-center wow fadeInUp mb-30">
                                <div class="product-thumbnail">
                                    <img src="assets/images/product/menu-6.png" alt="Product Image">
                                    {{-- <span class="discount">25% Off</span> --}}
                                </div>
                                <div class="product-info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="title"><a href="product-details.html">Coconut chin chin</a></h3>
                                    {{-- <span class="price"><span class="curreny"> £</span>15.53</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6 col-sm-6">
                            <div class="single-product-item text-center wow fadeInUp mb-30">
                                <div class="product-thumbnail">
                                    <img src="assets/images/product/menu-5.png" alt="Product Image">
                                </div>
                                <div class="product-info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="title"><a href="product-details.html">Chin chin</a></h3>
                                    {{-- <span class="price"><span class="curreny"> £</span>85.59</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6 col-sm-6">
                            <div class="single-product-item text-center wow fadeInUp mb-30">
                                <div class="product-thumbnail">
                                    <img src="assets/images/product/menu-6.png" alt="Product Image">
                                    {{-- <span class="discount">25% Off</span> --}}
                                </div>
                                <div class="product-info">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <h3 class="title"><a href="product-details.html">Coconut Chin chin</a></h3>
                                    {{-- <span class="price"><span class="curreny"> £</span>40.59</span> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="qichen-pagination text-center wow fadeInUp mt-30 mb-45 d-none">
                                <ul>
                                    <li><a href="#" class="prev"><i class="fas fa-arrow-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" class="next"><i class="fas fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Product Section ======-->
<!--====== Start Partners Section ======-->
<section class="partners-section light-red-bg pt-60 pb-60">
    <div class="container">
        <!--=== Partners Slider ===-->
        <div class="partner-slider-one wow fadeInDown">
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-1.png" alt="Partner Image"></a>
                </div>
            </div>
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-2.png" alt="Partner Image"></a>
                </div>
            </div>
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-3.png" alt="Partner Image"></a>
                </div>
            </div>
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-4.png" alt="Partner Image"></a>
                </div>
            </div>
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-5.png" alt="Partner Image"></a>
                </div>
            </div>
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-6.png" alt="Partner Image"></a>
                </div>
            </div>
            <div class="single-partner-item">
                <div class="partner-img">
                    <a href="#"><img src="assets/images/partners/partner-4.png" alt="Partner Image"></a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
