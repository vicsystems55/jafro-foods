@extends('layout')

@section('content')

        <!--=== Start Banner Section ===-->
        <section class="banner-two p-r z-1">
            <div class="shape shape-one"><span><img src="assets/images/hero/hero-shape-1.png" alt="shape"></span></div>
            <div class="shape shape-two"><span><img src="assets/images/hero/hot.png" alt="shape"></span></div>
            <div class="shape svg-shape">
                <svg height="435" viewBox="0 0 1920 435" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1330 0L0 435H1920V240L1330 0Z"/>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="hero-content">
                            <span class="tag-line wow fadeInUp" data-wow-delay=".5s">Special Fastfood</span>
                            <h1 class="wow fadeInDown" data-wow-delay=".7s">Jafro Foods</h1>
                            <div class="hero-button wow fadeInUp" data-wow-delay=".9s">
                                <a href="/our-products" class="main-btn filled-btn">Explore<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="hero-img-box wow fadeInRight" data-wow-delay=".7s">
                            <img src="assets/images/hero/hero-2.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </section><!--=== End Banner Section ===-->
        <!--=== Start Features Section ===-->
        <section class="features-section light-gray-bg pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="section-title text-center mb-40">
                            <span class="sub-title">What we offer</span>
                            <h2>Why Choose Jafro Foods</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-features-item-two animate-hover-icon wow fadeInUp mb-40">
                            <div class="inner-content">
                                {{-- <div class="icon">
                                    <i class="flaticon-pizza-slice-1"></i>
                                </div> --}}
                                <div class="text">
                                    <h3 class="title">Unique Flavors</h3>
                                    <p>Creative chefs blend unexpected ingredients for unique flavors, including coconut, peanut, and more."</p>
                                    <a href="/about-us" class="btn-link">read more<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-features-item-two animate-hover-icon wow fadeInDown mb-40">
                            <div class="inner-content">
                                {{-- <div class="icon">
                                    <i class="flaticon-chef-1"></i>
                                </div> --}}
                                <div class="text">
                                    <h3 class="title">African Experience</h3>
                                    <p>Savor an enriching African experience, as you journey through a tapestry of flavors and cultural heritage.</p>
                                    <a href="/about-us" class="btn-link">read more<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single-features-item-two animate-hover-icon wow fadeInUp mb-40">
                            <div class="inner-content">
                                {{-- <div class="icon">
                                    <i class="flaticon-delivery-man"></i>
                                </div> --}}
                                <div class="text">
                                    <h3 class="title">Online Delivery</h3>
                                    <p>Online delivery services offer a hassle-free way for consumers and wholesalers to access goods.</p>
                                    <a href="/about-us" class="btn-link">read more<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--=== End Features Section ===-->
        <!--=== Start About Section ===-->
        <section class="about-shape-two-section p-r z-1 pt-130 pb-80">
            {{-- <div class="shape shape-one"><span><img src="assets/images/about/net.png" alt="net image"></span></div>
            <div class="shape shape-two"><span><img src="assets/images/about/shape-1.png" alt="Shape image"></span></div> --}}
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-box mb-50 wow fadeInLeft">
                            <img src="assets/images/about/image-66.png" alt="About Image">
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
        <!--=== Start Menu Section ===-->
        <section class="menu-section pt-70">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="section-title text-center mb-60 wow fadeInDown">
                            <span class="sub-title">Best food menu</span>
                            <h2>Choose Your Best Menus</h2>
                        </div>
                    </div>
                </div>
                <div class="menu-slider-one wow fadeInUp">
                    <div class="menu-grid-item-two text-center mb-60">
                        <div class="menu-overlay"></div>
                        <div class="hover-content">
                            <div class="text">
                                <h3 class="title"><a href="/our-products">Chin Chin  Original</a></h3>
                                <span class="price"><span class="currency"> £</span>25.59</span>
                                <div class="menu-meta d-none">
                                    <a href="#" class="icon-btn"><i class="far fa-shopping-cart"></i></a>
                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                    <a href="#" class="icon-btn"><i class="fas fa-sliders-h"></i></a>
                                    <a href="#" class="icon-btn"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="assets/images/menu/menu-5.png" alt="">
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="/our-products">Chin Chin  Original</a></h3>
                            <span class="price"><span class="currency"> £</span>53.59</span>
                        </div>
                    </div>
                    <div class="menu-grid-item-two text-center mb-60">
                        <div class="menu-overlay"></div>
                        <div class="hover-content">
                            <div class="text">
                                <h3 class="title"><a href="/our-products"> Peanut Chin Chin </a></h3>
                                <span class="price"><span class="currency"> £</span>24.83</span>
                                <div class="menu-meta d-none">
                                    <a href="#" class="icon-btn"><i class="far fa-shopping-cart"></i></a>
                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                    <a href="#" class="icon-btn"><i class="fas fa-sliders-h"></i></a>
                                    <a href="#" class="icon-btn"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="assets/images/menu/menu-6.png" alt="">
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="/our-products"> Peanut Chin Chin</a></h3>
                            <span class="price"><span class="currency"> £</span>24.83</span>
                        </div>
                    </div>


                    <div class="menu-grid-item-two text-center mb-60">
                        <div class="menu-overlay"></div>
                        <div class="hover-content">
                            <div class="text">Jafro Foods
                                <h3 class="title"><a href="/our-products">Coconut Chin Chin</a></h3>
                                <span class="price"><span class="currency"> £</span>24.83</span>
                                <div class="menu-meta d-none">
                                    <a href="#" class="icon-btn"><i class="far fa-shopping-cart"></i></a>
                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                    <a href="#" class="icon-btn"><i class="fas fa-sliders-h"></i></a>
                                    <a href="#" class="icon-btn"><i class="far fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="assets/images/menu/menu-6.png" alt="">
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="/our-products">Coconut Chin Chin</a></h3>
                            <span class="price"><span class="currency"> £</span>24.83</span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--=== End Menu Section ===-->
         <!--=== Start Menu Section ===-->

        <!--=== End Menu Section ===-->
        <!--=== Start Testimonial Section ===-->
        {{-- <section class="gallery-section pb-130">
            <div class="container-fluid">
                <div class="gallery-slider-one wow fadeInUp">
                    <div class="gallery-item-one mb-60">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-1.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <span class="tag-btn">Fastfood</span>
                                    <h3 class="title">Chicken Hamburger</h3>
                                    <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item-one mb-60">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-2.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <span class="tag-btn">Fastfood</span>
                                    <h3 class="title">Chicken Hamburger</h3>
                                    <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item-one mb-60">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-3.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <span class="tag-btn">Fastfood</span>
                                    <h3 class="title">Chicken Hamburger</h3>
                                    <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item-one mb-60">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-4.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <span class="tag-btn">Fastfood</span>
                                    <h3 class="title">Chicken Hamburger</h3>
                                    <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item-one mb-60">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-2.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content">
                                    <span class="tag-btn">Fastfood</span>
                                    <h3 class="title">Chicken Hamburger</h3>
                                    <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--=== End Testimonial Section ===-->
        <!--=== Start Reservation Section ===-->
        {{-- <section class="reservation-section light-red-bg pt-90 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-10">
                        <div class="section-title text-center mb-50 wow fadeInUp">
                            <span class="sub-title">Booking table</span>
                            <h2>Booking table</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="reservation-content-box wow fadeInUp">
                            <div class="reservation-style-two">
                                <form class="reservation-form">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form_group">
                                                <label><i class="far fa-user"></i></label>
                                                <input type="text" class="form_control" placeholder="Person" name="number" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form_group">
                                                <label><i class="far fa-calendar-alt"></i></label>
                                                <input type="text" class="form_control" id="datepicker" placeholder="Reserved Date" name="date" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form_group">
                                                <select class="wide">
                                                    <option data-display="Reservation Time">Reservation Time</option>
                                                    <option value="01">9.00 Am</option>
                                                    <option value="01">9.30 Am</option>
                                                    <option value="01">10.00 Am</option>
                                                    <option value="01">10.30 Am</option>
                                                    <option value="01">11.00 Am</option>
                                                    <option value="01">11.30 Am</option>
                                                    <option value="01">12.00 Pm</option>
                                                    <option value="01">12.30 Pm</option>
                                                    <option value="01">01.00 Pm</option>
                                                    <option value="01">01.30 Pm</option>
                                                    <option value="01">02.00 Pm</option>
                                                    <option value="01">02.30 Pm</option>
                                                    <option value="01">03.00 Pm</option>
                                                    <option value="01">03.30 Pm</option>
                                                    <option value="01">04.00 Pm</option>
                                                    <option value="01">04.30 Pm</option>
                                                    <option value="01">05.00 Pm</option>
                                                    <option value="01">05.30 Pm</option>
                                                    <option value="01">06.00 Pm</option>
                                                    <option value="01">06.30 Pm</option>
                                                    <option value="01">07.00 Pm</option>
                                                    <option value="01">07.30 Pm</option>
                                                    <option value="01">08.00 Pm</option>
                                                    <option value="01">08.30 Pm</option>
                                                    <option value="01">09.00 Pm</option>
                                                    <option value="01">09.30 Pm</option>
                                                    <option value="01">10.00 Pm</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form_group">
                                                <button class="main-btn btn-red">book a table<i class="far fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--=== End Reservation Section ===-->
        <!--=== Start Testimonial Section ===-->
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
        <!--=== End Testimonial Section ===-->
        <!--=== Start Event Section ===-->
        {{-- <section class="event-section pt-70 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="event-one_image-box text-center p-r z-1 wow fadeInLeft">
                            <img src="assets/images/gallery/event-1.png" alt="Event Image">
                            <div class="shape circle-shape"><span></span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="event-content-box content-box-gap pl-lg-50 wow fadeInRight">
                            <div class="section-title section-title-left mb-30">
                                <span class="sub-title">events & party</span>
                                <h2>Reservations For Enjoying Your Events & Party</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis natus voluptatem accusantium doloremque laudantium totam aperiam eaque queab inventore
                                veritatis et quasi architecto beatae vitae sunt explicabo.</p>
                            <a href="#" class="main-btn btn-red">reservations<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--=== End Event Section ===-->
        <!--====== Start Partners Section ======-->
        <section class="partners-section light-red-bg pt-60 pb-60 d-none">
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
        </section><!--====== End Partners Section ======-->

@endsection
