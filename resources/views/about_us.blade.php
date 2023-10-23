@extends('layout')
@section('content')

        <!--====== Start Header ======-->

        <!--====== Start Breadcrumb Section ======-->
        <section class="page-banner light-red-bg p-r z-1 bg_cover" style="background-image: url(assets/images/bg/page-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-banner-content text-center wow fadeInDown">
                            <h1 class="page-title">About Us</h1>
                            <ul class="breadcrumb-link text-white">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->
        <!--=== Start About Section ===-->
        <section class="about-shape-section pt-130 pb-80 p-r z-1">
            {{-- <div class="shape shape-one"><span><img src="assets/images/about/shape-1.png" alt="shape"></span></div>
            <div class="shape shape-two"><span><img src="assets/images/about/shape-2.png" alt="shape"></span></div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three_image-box text-lg-end mb-20">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="assets/images/about/image-7.png" class="about-img-one mb-30 wow fadeInUp" alt="About Image">
                                    <img src="assets/images/about/image-8.png" class="about-img-two mb-30 wow fadeInDown" alt="About Image">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/images/about/image-6.jpg" class="about-img-three mb-30 wow fadeInRight" alt="About Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-box content-box-gap mb-40">
                            <div class="section-title section-title-left mb-30 wow fadeInUp">
                                <span class="sub-title">About Jafro</span>
                                <h2>The Cleanest, Most Delicious African Biscuit Snack.</h2>
                            </div>
                            <p class="wow fadeInDown">Jafro Foods specializes in bringing African and Caribbean cuisine to the diaspora, primarily serving the UK and EU residents.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fancy-icon-box mb-50 wow fadeInUp">
                                        <div class="icon">
                                            <i class="flaticon-food-serving"></i>
                                        </div>
                                        <div class="text">
                                            <h5>Testy
                                                Foods Menu</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fancy-icon-box mb-50 wow fadeInUp">
                                        <div class="icon">
                                            <i class="flaticon-discuss"></i>
                                        </div>
                                        <div class="text">
                                            <h5>6534+ Satisfied Global Customers</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fancy-icon-box mb-50 wow fadeInUp">
                                        <div class="icon">
                                            <i class="flaticon-certificate"></i>
                                        </div>
                                        <div class="text">
                                            <h5>We’ve 25+ Years Of Experience</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fancy-icon-box mb-50 wow fadeInUp">
                                        <div class="icon">
                                            <i class="flaticon-smartphone"></i>
                                        </div>
                                        <div class="text">
                                            <h5>Online Orders</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-button wow fadeInUp">
                                <a href="/about-us" class="main-btn btn-red">learn more<i class="far fa-arrow-right"></i></a>
                                <a href="tel:000(123)45689" class="call-button">
                                    <div class="icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="text">
                                        <span>Call For Order</span>
                                        <h5>+44 (123) 456 89</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--=== End About Section ===-->
        <!--=== Start Team Section ===-->
        <section class="testimonial-section-three pt-120 pb-80">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="section-title section-title-left mb-50 wow fadeInLeft">
                            <span class="sub-title">Foods reviews</span>
                            <h2>Global Customer Feedback</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-arrows wow fadeInRight mb-60"></div>
                    </div>
                </div>
                <div class="testimonial-slider-three wow fadeInUp">
                    <div class="single-testimonial-three">
                        <div class="testimonial-inner-content">
                            <div class="rating-quote-box d-flex align-items-center justify-content-between">
                                <div class="ratings-box">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                            </div>
                            <h3>“Yamee Foods”</h3>
                            <p>Their African chin chin is an exquisite blend of tradition and taste. I'm captivated by the unique flavors, aperiam, eaque ipsa quae ab inventore veritatis et quase. </p>
                            <div class="author-title-thumb">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/author-thumb-2.jpg" alt="Author Thumb">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Hubert J. Johnson</h3>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-three">
                        <div class="testimonial-inner-content">
                            <div class="rating-quote-box d-flex align-items-center justify-content-between">
                                <div class="ratings-box">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                            </div>
                            <h3>“Mind blowing”</h3>
                            <p>Jafro Foods is a taste of Africa in every bite. Their African chin chin is a delight, combining tradition and flavor flawlessly. I can't get enough! Highly recommend this exceptional snack. </p>
                            <div class="author-title-thumb">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/author-thumb-3.jpg" alt="Author Thumb">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Dwayne S. Gilfillan</h3>
                                    <p class="position">Junior Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-three">
                        <div class="testimonial-inner-content">
                            <div class="rating-quote-box d-flex align-items-center justify-content-between">
                                <div class="ratings-box">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                            </div>
                            <h3>“Delicious”</h3>
                            <p>Jafro Foods' African chin chin is a culinary masterpiece. Seductive flavors, perfected by skilled artisans. It's an irresistible journey of taste. Aperiam the authentic essence of Africa with every bite. Highly recommended! </p>
                            <div class="author-title-thumb">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/author-thumb-4.jpg" alt="Author Thumb">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Michael B. Jorgensen</h3>
                                    <p class="position">Businessman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-three">
                        <div class="testimonial-inner-content">
                            <div class="rating-quote-box d-flex align-items-center justify-content-between">
                                <div class="ratings-box">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="quote">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                            </div>
                            <h3>“Mind blowing”</h3>
                            <p>Jafro Foods has redefined my snacking experience with their authentic African chin chin. Each bite is a flavorful journey. Their commitment to quality is truly remarkable. I'm a loyal fan! </p>
                            <div class="author-title-thumb">
                                <div class="author-thumb">
                                    <img src="assets/images/testimonial/author-thumb-2.jpg" alt="Author Thumb">
                                </div>
                                <div class="author-title">
                                    <h3 class="title">Brian A. Barnes</h3>
                                    <p class="position">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=== End Team Section ===-->
        <!--====== Start Partners Section ======-->

        <!--====== End Partners Section ======-->

@endsection
