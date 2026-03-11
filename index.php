<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision Vacation | Best Tour Packages, Holiday Deals & Itineraries </title>
    <meta name="description" content="Discover affordable tour and holiday packages with Vision Vacation. Explore customized itineraries, top destinations, and unforgettable travel experiences.">
    <meta name="keywords" content="">
    <link href="assets/img/logos/favicon.png" rel="shortcut icon" type="image/png">
</head>

<body>
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/+918739056222" class="wa-float" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
    <!--End-->
    <!-- haedaer -->
    <?php include 'include/header.php'; ?>
    <!-- Main -->
    <main>
        <!-- Hero -->
        <section class="hero" data-aos="fade">
            <!-- Video -->
            <div class="hero-video">
                <div class="bg-video bg-overlay ratio ratio-16x9 z-0">
                    <video class="object-fit-cover" poster="assets/img/background/b5.html"
                        src="assets/media/vission-home.mp4" autoplay loop playsinline muted></video>
                    <div class="bg-content hero-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-7 col-md-10">
                                    <h1 class="display-3 hero-title">
                                        Turn Your Travel Vision into the Perfect Vacation
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video -->
            <!-- Check tour -->
            <div class="container">
                <div class="search-tours search-hero">

                    <form id="searchForm" class="search-tour-form" method="post">
                        <div class="search-tour-input">
                            <div class="row g-3 g-xl-2">

                                <div class="col-12 col-xl-3 col-md-6">
                                    <div class="input-icon-group">
                                        <label for="txtKeyword" class="input-icon"><i class="bi bi-geo-alt"></i></label>
                                        <input id="txtKeyword" type="text" class="form-control shadow-sm"
                                            placeholder="Where are you going?">
                                    </div>
                                </div>

                                <div class="col-12 col-xl-3 col-md-6">
                                    <div class="input-icon-group tour-date">
                                        <label class="input-icon hicon hicon-bold"><i
                                                class="bi bi-calendar-event"></i></label>
                                        <input id="txtCheckDate2" type="text" class="form-select shadow-sm"
                                            placeholder="Tour date" data-input readonly>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-2 col-md-6">
                                    <div class="input-icon-group position-relative">
                                        <label class="input-icon"><i class="bi bi-people"></i></label>

                                        <input type="text" class="form-control shadow-sm" id="guestSummary"
                                            value="1 Guest" readonly>

                                        <div id="guestDropdown"
                                            class="card shadow-lg p-4 position-absolute bg-white d-none"
                                            style="top:100%; right:0; width:350px; border-radius:18px; z-index:999;">

                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div>
                                                    <h6 class="mb-0">Adults</h6>
                                                    <small class="text-muted">Age 18 Or Above</small>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary rounded-circle"
                                                        style="width:40px;height:40px;"
                                                        onclick="changeGuest('adult', -1)">−</button>
                                                    <span id="adultCount" class="fw-semibold">1</span>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary rounded-circle"
                                                        style="width:40px;height:40px;"
                                                        onclick="changeGuest('adult', 1)">+</button>
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <div>
                                                    <h6 class="mb-0">Children</h6>
                                                    <small class="text-muted">Under 18</small>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <button type="button"
                                                        class="btn btn-outline-secondary rounded-circle"
                                                        style="width:40px;height:40px;"
                                                        onclick="changeGuest('child', -1)">−</button>
                                                    <span id="childCount" class="fw-semibold">0</span>
                                                    <button type="button"
                                                        class="btn btn-outline-secondary rounded-circle"
                                                        style="width:40px;height:40px;"
                                                        onclick="changeGuest('child', 1)">+</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-2 col-md-6">
                                    <div class="input-icon-group">
                                        <label class="input-icon"><i class="bi bi-telephone"></i></label>
                                        <input type="tel" id="txtPhone" class="form-control shadow-sm"
                                            placeholder="Your Number" required>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-2 col-md-6">
                                    <button type="button" onclick="sendToWhatsApp()"
                                        class="btn btn-primary btn-uppercase w-100">
                                        <i class="bi bi-whatsapp"></i>
                                        <span>Send Inquiry</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- /Check tour -->
        </section>
        <!-- /Hero -->

        <!-- Featured -->
        <div class="contanier">
            <div class="block-title text-center p-top-90">
                <h2 class="h1 title card-title lh-xs">Top “Exclusive Destinations” </h2>
            </div>
        </div>
        <section class="destinations">
            <div class="destinations__header">
                <h2 class="destinations__title">Popular destinations</h2>
                <a class="destinations__cta" href="#">Search all destinations</a>
            </div>

            <div class="destinations__sliderWrap">
                <!-- arrows (show on mobile + desktop) -->
                <button class="destinations__nav destinations__nav--prev" type="button" aria-label="Previous">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M15 18l-6-6 6-6" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="destinations__scroller" id="destinationsScroller" aria-label="Popular destinations">
                    <!-- Card -->
                    <a class="destination-card" href="domestic-holidays/andaman-tour-packages/" aria-label="Andaman">
                        <img class="destination-card__img" src="assets/img/hero/andaman.png" alt="Andaman" />
                        <span class="destination-card__pill">Andaman</span>
                    </a>

                    <a class="destination-card" href="domestic-holidays/goa-tour-packages/" aria-label="Goa">
                        <img class="destination-card__img" src="assets/img/hero/goa.png" alt="Goa" />
                        <span class="destination-card__pill">Goa</span>
                    </a>

                    <a class="destination-card" href="domestic-holidays/kerala-tour-packages/" aria-label="Kerala">
                        <img class="destination-card__img" src="assets/img/hero/kerala.png" alt="Kerala" />
                        <span class="destination-card__pill">Kerala</span>
                    </a>

                    <a class="destination-card" href="domestic-holidays/kashmir-tour-packages/" aria-label="Kashmir">
                        <img class="destination-card__img" src="assets/img/hero/kashmir.png" alt="Kashmir" />
                        <span class="destination-card__pill">Kashmir</span>
                    </a>

                    <a class="destination-card" href="domestic-holidays/himachal-tour-packages/" aria-label="Himachal">
                        <img class="destination-card__img" src="assets/img/hero/himachal.png" alt="Himachal" />
                        <span class="destination-card__pill">Himachal</span>
                    </a>

                </div>

                <button class="destinations__nav destinations__nav--next" type="button" aria-label="Next">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>

        <!-- /Featured -->

        <!-- Categories -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
            <div class="container">
                <!-- Title -->
                <div class="block-title text-center pb-4">
                    <h2 class="h1 title">Explore Travel Experiences by </h2>
                    <div class="extra-info">
                        <strong>+50</strong>
                        <span>Attractive destinations</span>
                    </div>
                </div>
                <!-- /Title -->
                <!-- Category list -->
                <div class="row g-3 g-md-4">
                    <div class="col-6 col-xxl-3 col-xl-4 col-md-6">
                        <a href="#" class="mini-card card-center shadow-sm rounded">
                            <span class="card-icon">
                                <img src="assets/img/icons/Adventure Sports.svg" alt="Ecotourism & Resort">
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">Adventure Sports</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-4 col-md-6">
                        <a href="#" class="mini-card card-center  shadow-sm rounded">
                            <span class="card-icon">
                                <img src="assets/img/icons/Nature & Wildlife.svg" alt="Hiking & Trekking">
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">Nature & Wildlife</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-4 col-md-6">
                        <a href="#" class="mini-card card-center shadow-sm rounded">
                            <span>
                                <img src="assets/img/icons/Trekking & Camping.svg" alt="Trekking & Camping">
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">Trekking & Camping</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-4 col-md-6">
                        <a href="#" class="mini-card card-center  shadow-sm rounded">
                            <span class="card-icon">
                                <img src="assets/img/icons/Ecotourism & Resort.svg" alt="Ecotourism & Resort">
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">Ecotourism & Resort</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-4 col-md-6">
                        <a href="#" class="mini-card card-center  shadow-sm rounded">
                            <span class="card-icon">
                                <img src="assets/img/icons/Festival & Events.svg" alt="Festivals & Events">
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">Festivals & Events</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xxl-3 col-xl-4 col-md-6">
                        <a href="#" class="mini-card card-center  shadow-sm rounded">
                            <span class="card-icon">
                                <img src="assets/img/icons/Food & Culinary.svg" alt="Food & Culinary">
                            </span>
                            <div class="card-content">
                                <h3 class="h5 card-title">Food & Culinary</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /Category list -->
                <div class="text-center fw-medium text-secondary mt-4">
                    You need <a href="https://wa.me/+918739056222"><abbr title="Chats Now"
                            class="fw-semibold">advice</abbr></a>?
                </div>
            </div>
        </section>
        <!-- /Categories -->

        <!-- Booking -->
        <section>
            <div class="container p-bottom-90">
                <div class="row">
                    <div class="col">

                        <div id="bannerSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="assets/img/about/andaman.svg" class="d-block w-100" alt="Banner 1">
                                </div>

                                <div class="carousel-item">
                                    <img src="assets/img/about/goa.svg" class="d-block w-100" alt="Banner 2">
                                </div>

                                <div class="carousel-item">
                                    <img src="assets/img/about/kerla.svg" class="d-block w-100" alt="Banner 3">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/about/kashmir.svg" class="d-block w-100" alt="Banner 4">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/about/himachal.svg" class="d-block w-100" alt="Banner 5">
                                </div>
                            </div>

                            <!-- Previous Button -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#bannerSlider"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <!-- Next Button -->
                            <button class="carousel-control-next" type="button" data-bs-target="#bannerSlider"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /Booking -->

        <!-- Testimonials -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
            <div class="container">
                <!-- Title -->
                <div class="text-center mb-4">
                    <div class="block-title">
                        <h2 class="h1 title">Check what are beloved customers are saying... </h2>
                    </div>

                </div>
                <!-- /Title -->
                <div class="testimonials-slider-3 splide mb-5">
                    <!-- Testimonial list -->
                    <div class="splide__track pt-2 pb-2">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <!-- Testimonial -->
                                <div class="testimonial-above mb-1 hover-effect">
                                    <div class="testimonial-content rounded shadow-sm">
                                        <div class="testimonial-star">
                                            <span class="star-rate-view star-rate-size-sm"><span
                                                    class="star-value rate-45"></span></span>
                                        </div>
                                        <blockquote class="testimonial-review">
                                            “I’ve booked trips online before, but this was completely different. The
                                            team listened to what we wanted and suggested places we would’ve never found
                                            on our own. Everything went smoothly, and we didn’t have to stress about a
                                            single detail.”
                                        </blockquote>
                                        <div class="testimonial-name">
                                            <h3 class="h5 mb-0">Sarah </h3>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->
                            </li>
                            <li class="splide__slide">
                                <!-- Testimonial -->
                                <div class="testimonial-above mb-1 hover-effect">
                                    <div class="testimonial-content rounded shadow-sm">
                                        <div class="testimonial-star">
                                            <span class="star-rate-view star-rate-size-sm"><span
                                                    class="star-value rate-45"></span></span>
                                        </div>
                                        <blockquote class="testimonial-review">
                                            “Our anniversary trip was honestly perfect. From the hotel selection to the
                                            little surprises, they arranged. They took all the care about the
                                            experience, not just the booking.”
                                        </blockquote>
                                        <div class="testimonial-name">
                                            <h3 class="h5 mb-0">Amita</h3>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->
                            </li>
                            <li class="splide__slide">
                                <!-- Testimonial -->
                                <div class="testimonial-above mb-1 hover-effect">
                                    <div class="testimonial-content rounded shadow-sm">
                                        <div class="testimonial-star">
                                            <span class="star-rate-view star-rate-size-sm"><span
                                                    class="star-value rate-45"></span></span>
                                        </div>
                                        <blockquote class="testimonial-review">
                                            “What I appreciated most was the communication. Anytime I had a question,
                                            someone responded quickly and clearly. It made planning an international
                                            trip feel easy and manageable.”
                                        </blockquote>
                                        <div class="testimonial-name">
                                            <h3 class="h5 mb-0">Priya </h3>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->
                            </li>
                            <li class="splide__slide">
                                <!-- /Testimonial -->
                                <div class="testimonial-above mb-1 hover-effect">
                                    <div class="testimonial-content rounded shadow-sm">
                                        <div class="testimonial-star">
                                            <span class="star-rate-view star-rate-size-sm"><span
                                                    class="star-value rate-45"></span></span>
                                        </div>
                                        <blockquote class="testimonial-review">
                                            “We travelled with two kids, so I was worried about the travel. Vision
                                            Vacation handled everything. Transfers were on time; the resort was exactly
                                            as told. Loved the vacation
                                        </blockquote>
                                        <div class="testimonial-name">
                                            <h3 class="h5 mb-0">Mayank</h3>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->
                            </li>
                            <li class="splide__slide">
                                <!-- /Testimonial -->
                                <div class="testimonial-above mb-1 hover-effect">
                                    <div class="testimonial-content rounded shadow-sm">
                                        <div class="testimonial-star">
                                            <span class="star-rate-view star-rate-size-sm"><span
                                                    class="star-value rate-45"></span></span>
                                        </div>
                                        <blockquote class="testimonial-review">
                                            “They helped us plan a last-minute getaway and somehow made it so stress
                                            free. Great recommendations, fair pricing, and no hidden surprises.”
                                        </blockquote>
                                        <div class="testimonial-name">
                                            <h3 class="h5 mb-0">Elena </h3>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->
                            </li>
                            <li class="splide__slide">
                                <!-- /Testimonial -->
                                <div class="testimonial-above mb-1 hover-effect">
                                    <div class="testimonial-content rounded shadow-sm">
                                        <div class="testimonial-star">
                                            <span class="star-rate-view star-rate-size-sm"><span
                                                    class="star-value rate-45"></span></span>
                                        </div>
                                        <blockquote class="testimonial-review">
                                            "The itinerary was balanced, flexible, and exactly our style. They made sure
                                            I get the comfortable stay and everything was perfect."
                                        </blockquote>
                                        <div class="testimonial-name">
                                            <h3 class="h5 mb-0">Tushar</h3>
                                        </div>
                                    </div>

                                </div>
                                <!-- /Testimonial -->
                            </li>
                        </ul>
                    </div>
                    <!-- Testimonial list -->
                </div>
            </div>
        </section>
        <!-- /testimonials -->


        <!-- why book  -->
        <div class="container">
            <div class="block-title text-center pt-5">
                <h2 class="h1 title"> Why Book with Vision Vacation? </h2>
            </div>
        </div>
        <section class="why-features">
            <div class="container">
                <div class="why-grid">

                    <div class="why-item">
                        <div class="why-icon">🌿</div>
                        <h3>Personalized Travel Planning Experts</h3>
                    </div>

                    <div class="why-item">
                        <div class="why-icon">💰</div>
                        <h3>Exclusive Deals &amp; Best Price</h3>
                    </div>

                    <div class="why-item">
                        <div class="why-icon">📞</div>
                        <h3>24/7 Travel Support &amp; Assistance</h3>
                    </div>

                    <div class="why-item">
                        <div class="why-icon">🔒</div>
                        <h3>Trusted Global Network &amp; Secure Booking</h3>
                    </div>

                </div>
            </div>
        </section>
        <!-- end -->

        <!-- About -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 col-xl-6">
                        <!-- Image -->
                        <div class="pe-xl-5 mb-5 mb-xl-0">
                            <div class="block-title ms-5 mb-5">
                                <small class="sub-title">The Vision Vacation Advantage </small>
                                <h2 class="h1 title">Find Your Perfect Vacation with Our Vision </h2>
                                <p>What truly sets us apart is the way we listen. We don’t sell pre-packed trips, we
                                    take the time to understand what matters to you and build your journey around it.
                                    With trusted global partners, honest pricing, and real human support at every step,
                                    your vacation feels effortless from start to finish.
                                </p>
                                <div class="pt-3">
                                    <a href="about.php" class="btn btn-primary btn-uppercase mnw-180">
                                        <span>Read more</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- /Image -->
                    </div>
                    <div class="col-12 col-xl-6">
                        <!-- Content -->
                        <div class="image-info image-info-vertical">

                            <div class="image-center mb-4">
                                <img src="assets/img/about/a10.html" srcset="./assets/img/about/about-us.jpg 2x"
                                    class="rounded w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->

        <!-- gallery -->
        <div class="container-fluid ptb-100">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="block-title">
                        <h2 class="h1 title">Our Beautiful Movements</h2>
                    </div>
                </div>
                <section class="movement-section">
                    <div class="movement-grid">
                        <img class=" medium" src="assets/img/tours/grid-img/grid1.webp">
                        <img class=" medium" src="assets/img/tours/grid-img/grid2.webp">
                        <img class=" medium" src="assets/img/tours/grid-img/grid3.webp">
                        <img class=" tall" src="assets/img/tours/grid-img/grid4.webp"> <!-- tall -->
                        <img class=" medium" src="assets/img/tours/grid-img/grid5.webp">
                        <img class=" medium" src="assets/img/tours/grid-img/grid6.webp">
                        <img class="tall" src="assets/img/tours/grid-img/grid7.webp"> <!-- tall -->
                        <img class=" medium" src="assets/img/tours/grid-img/grid8.webp">
                        <img class=" tall" src="assets/img/tours/grid-img/grid9.webp">

                        <img class=" medium" src="assets/img/tours/grid-img/grid10.webp"> <!-- tall -->
                        <img src="assets/img/tours/grid-img/grid11.webp">

                        <img src="assets/img/tours/grid-img/grid12.webp">

                    </div>
                </section>
            </div>
        </div>
        <!-- end -->

        <!-- blog  -->
        <section class="p-top-90 p-bottom-90 bg-gray-gradient" data-aos="fade">
            <div class="container">
                <!-- Title -->
                <div class="text-center mb-5">
                    <div class="block-title">
                        <h2 class="h1 title">Vision Vacation Travel Insight</h2>
                    </div>
                </div>
                <!-- /Title -->

                <!-- Blog Slider (CLEAN) -->
                <div class="blog-slider-2 splide mb-5">
                    <div class="splide__track pt-2 pb-2">
                        <ul class="splide__list">

                            <!-- Slide 1 -->
                            <li class="splide__slide">
                                <div class="post shadow-sm rounded hover-effect">
                                    <div class="post-img">
                                        <a href="#" class="float-text float-absolute">Travel tips</a>
                                        <a href="#">
                                            <figure class="image-hover image-hover-overlay rounded">
                                                <img src="./assets/img/hero/thailand.png" alt="Thailand">

                                            </figure>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#">Top 10 Must-Visit Tourist Spots in Moliva</a>
                                        </h3>
                                        <div class="post-link">
                                            <div class="post-ext">
                                                <div class="post-date"><i class="bi bi-calendar4-week"></i><span> Jun 30
                                                        2024</span>
                                                </div>
                                                <div class="post-comment"><i class="bi bi-chat-dots"></i><span>
                                                        36</span></div>
                                                <div class="post-view"><i class="bi bi-bar-chart"></i><span> 754</span>
                                                </div>
                                            </div>
                                            <a href="#" class="circle-icon circle-icon-link">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Slide 2 -->
                            <li class="splide__slide">
                                <div class="post shadow-sm rounded hover-effect">
                                    <div class="post-img">
                                        <a href="#" class="float-text float-absolute"><span>Hotel &amp;
                                                Resort</span></a>
                                        <a href="#">
                                            <figure class="image-hover image-hover-overlay rounded">
                                                <img src="./assets/img/blog/b2.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#">5 Best Tips for an Amazing Moliva Trip</a>
                                        </h3>
                                        <div class="post-link">
                                            <div class="post-ext">
                                                <div class="post-date"><i class="bi bi-calendar4-week"></i><span> Jun 30
                                                        2024</span>
                                                </div>
                                                <div class="post-comment"><i class="bi bi-chat-dots"></i><span>
                                                        36</span></div>
                                                <div class="post-view"><i class="bi bi-bar-chart"></i><span> 754</span>
                                                </div>
                                            </div>
                                            <a href="#" class="circle-icon circle-icon-link">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Slide 3 -->
                            <li class="splide__slide">
                                <div class="post shadow-sm rounded hover-effect">
                                    <div class="post-img">
                                        <a href="#" class="float-text float-absolute"><span>Travel
                                                Guide</span></a>
                                        <a href="#">
                                            <figure class="image-hover image-hover-overlay rounded">
                                                <img src="./assets/img/blog/b3.jpg" alt="">

                                            </figure>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#">8 Key Essentials for Traveling to Moliva</a>
                                        </h3>
                                        <div class="post-link">
                                            <div class="post-ext">
                                                <div class="post-date"><i class="bi bi-calendar4-week"></i><span> Jun 30
                                                        2024</span>
                                                </div>
                                                <div class="post-comment"><i class="bi bi-chat-dots"></i><span>
                                                        36</span></div>
                                                <div class="post-view"><i class="bi bi-bar-chart"></i><span> 754</span>
                                                </div>
                                            </div>
                                            <a href="#" class="circle-icon circle-icon-link">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Slide 4 -->
                            <li class="splide__slide">
                                <div class="post shadow-sm rounded hover-effect">
                                    <div class="post-img">
                                        <a href="#" class="float-text float-absolute"><span>Hotel &amp;
                                                Resort</span></a>
                                        <a href="#">
                                            <figure class="image-hover image-hover-overlay rounded">
                                                <img src="./assets/img/blog/b4.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#">Discover Beautiful Moliva: Nature's
                                                Paradise</a>
                                        </h3>
                                        <div class="post-link">
                                            <div class="post-ext">
                                                <div class="post-date"><i class="bi bi-calendar4-week"></i><span> Jun 30
                                                        2024</span>
                                                </div>
                                                <div class="post-comment"><i class="bi bi-chat-dots"></i><span>
                                                        36</span></div>
                                                <div class="post-view"><i class="bi bi-bar-chart"></i><span> 754</span>
                                                </div>
                                            </div>
                                            <a href="#" class="circle-icon circle-icon-link">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Slide 5 -->
                            <li class="splide__slide">
                                <div class="post shadow-sm rounded hover-effect">
                                    <div class="post-img">
                                        <a href="#" class="float-text float-absolute"><span>Destinations</span></a>
                                        <a href="#">
                                            <figure class="image-hover image-hover-overlay rounded">
                                                <img src="./assets/img/blog/b6.jpg" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="#">Best Time Ever to Explore Moliva's Nature</a>
                                        </h3>
                                        <div class="post-link">
                                            <div class="post-ext">
                                                <div class="post-date"><i class="bi bi-calendar4-week"></i><span> Jun 30
                                                        2024</span>
                                                </div>
                                                <div class="post-comment"><i class="bi bi-chat-dots"></i><span>
                                                        36</span></div>
                                                <div class="post-view"><i class="bi bi-bar-chart"></i><span> 754</span>
                                                </div>
                                            </div>
                                            <a href="#" class="circle-icon circle-icon-link">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Blog Slider -->
            </div>
        </section>
    </main>
    <!-- /Main -->
    <?php include 'include/footer.php'; ?>

    <script defer src="assets/js/theme-1.min.js"></script>
    <script defer src="assets/js/theme-2.min.js"></script>
    <script defer src="assets/js/theme-3.min.js"></script>

</body>

</html>