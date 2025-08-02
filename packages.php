<?php include('header.php') ?>

<style>
    .gt-shop-list-items .gt-shop-image img {
        width: 100%;

    }

    .gt-shop-list-items .gt-shop-content .gt-theme-btn .gt-text-btn {
        padding: 13px 22px;
        margin-top: 10px;
        border-radius: 50px;
    }

    .gt-shop-list-items {
        background-color: #fff;
    }

    .btn-primary {
        background: #1151b1;
        border-color: #1151b1;
    }

    .gt-star i {
        font-size: 14px;
    }

    .text-primary {
        --bs-text-opacity: 1;
        color: rgb(17 81 177) !important;
    }

    .carousel-indicators [data-bs-target] {
        background-color: #dc3545;
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .carousel-indicators {

        bottom: -40px;

    }

    .card {
        border: none;
    }

    @media (max-width: 576px) {
        .carousel-item .card img {
            height: 100px !important;

        }

        .card-title {
            font-size: 14px;
        }

        .mb-0 {
            font-size: 15px;
        }

        .gt-shop-list-items.gt-shop-image img {
            height: 280px !important;
        }
    }

    .accordion-button::after {

        content: none;
    }

    .accordion-item {
        color: var(--bs-accordion-color);
        background-color: var(--bs-accordion-bg);
        border: none;
    }

    .accordion {
        --bs-accordion-btn-focus-border-color: white;
    }

    .gt-shop-details-wrapper .gt-shop-details-content p {
        margin-top: 2px;
    }
</style>
<style>
    .feature-list {
        padding-left: 0;
        list-style: none;
    }

    .feature-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 1rem;
    }

    .feature-list img {
        flex-shrink: 0;
        margin-top: 3px;
    }

    .feature-text {
        line-height: 1.3;
    }

    .feature-text small {
        display: block;
        color: #ffc107;
        font-size: 0.85em;
        font-weight: bold;
    }

    @media (max-width: 576px) {
        .feature-text {
            font-size: 0.95rem;
        }
    }

    .accordion-body {
        background-color: white;
    }

    .accordion-body h6 {
        font-size: 1rem;
        color: #222;
    }

    .accordion-body p {
        font-size: 0.95rem;
        color: #555;
    }
</style>
<!-- SparkMyCar Breadcrunb Section Start -->
<div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-bg.jpg');">
    <div class="gt-right-shape">
        <img src="assets/img/breadcrumb-shape.jpg" alt="img">
    </div>
    <div class="container">
        <div class="gt-page-heading">
            <div class="gt-breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Our Packages</h1>
            </div>
            <ul class="gt-breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                <li>
                    <a href="index">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    Car Wash
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- GT Shop Section Start -->
<section class="gt-shop-section fix section-padding">
    <div class="container">

        <div class="tab-content">

            <div id="list" class="tab-pane fade show active">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="gt-shop-list-items border rounded shadow-sm p-3">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-4 gt-shop-image">
                                    <img src="assets/img/home-1/shop/list-02.jpg" alt="img" class="img-fluid rounded"
                                        style="height: 180px; object-fit: cover;">
                                </div>

                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                                        <h5 class="fw-bold mb-0">
                                            <a href="shop-details.html" class="text-dark text-decoration-none">Interior
                                                + Exterior Foam Wash</a>
                                        </h5>
                                        <div class="gt-star small mt-2 mt-md-0">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="ms-2 text-muted">(4.5)</span>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled mb-3 small">
                                        <li><i class="fas fa-check text-success me-2"></i>Foam wash & Tyre Polish</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Interior Vacuum</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Exterior High Pressure Wash
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                        <div class="gt-price-list d-flex align-items-center gap-2">
                                            <span class="fw-bold fs-5 text-primary">₹102.00</span>
                                            <del class="text-danger">₹226.00</del>
                                        </div>

                                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                                            class="text-primary fw-semibold text-decoration-underline fs-6">
                                            View Details
                                        </a>

                                        <a href="shop-cart.html" class="btn btn-primary rounded-pill px-4 fw-semibold">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6 mb-4">
                        <div class="gt-shop-list-items border rounded shadow-sm p-3">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-4 gt-shop-image">
                                    <img src="assets/img/home-1/shop/list-02.jpg" alt="img" class="img-fluid rounded"
                                        style="height: 180px; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                                        <h5 class="fw-bold mb-0">
                                            <a href="shop-details.html" class="text-dark text-decoration-none">Steam
                                                Wash + Vacuum</a>
                                        </h5>
                                        <div class="gt-star small mt-2 mt-md-0">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <span class="ms-2 text-muted">(4.0)</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-3 small">
                                        <li><i class="fas fa-check text-success me-2"></i>Steam Wash All Around</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Vacuum Interior Clean</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Tyre Polish Finish</li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                        <div class="gt-price-list d-flex align-items-center gap-2">
                                            <span class="fw-bold fs-5 text-primary">₹149.00</span>
                                            <del class="text-danger">₹299.00</del>
                                        </div>
                                        <a href="#" class="text-primary fw-semibold text-decoration-underline fs-6">View
                                            Details</a>
                                        <a href="shop-cart.html"
                                            class="btn btn-primary rounded-pill px-4 fw-semibold">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="gt-shop-list-items border rounded shadow-sm p-3">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-4 gt-shop-image">
                                    <img src="assets/img/home-1/shop/list-02.jpg" alt="img" class="img-fluid rounded"
                                        style="height: 180px; object-fit: cover;">
                                </div>

                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                                        <h5 class="fw-bold mb-0">
                                            <a href="shop-details.html" class="text-dark text-decoration-none">Deep
                                                Interior Spa Cleaning</a>
                                        </h5>
                                        <div class="gt-star small mt-2 mt-md-0">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <span class="ms-2 text-muted">(4.5)</span>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled mb-3 small">
                                        <li><i class="fas fa-check text-success me-2"></i> Seat Shampoo & Vacuum</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Dashboard Polish</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Antibacterial Treatment
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                        <div class="gt-price-list d-flex align-items-center gap-2">
                                            <span class="fw-bold fs-5 text-primary">₹102.00</span>
                                            <del class="text-danger">₹226.00</del>
                                        </div>

                                        <a href="#" class="text-primary fw-semibold text-decoration-underline fs-6">
                                            View Details
                                        </a>

                                        <a href="shop-cart.html" class="btn btn-primary rounded-pill px-4 fw-semibold">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6 mb-4">
                        <div class="gt-shop-list-items border rounded shadow-sm p-3">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-4 gt-shop-image">
                                    <img src="assets/img/home-1/shop/list-02.jpg" alt="img" class="img-fluid rounded"
                                        style="height: 180px; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                                        <h5 class="fw-bold mb-0">
                                            <a href="shop-details.html" class="text-dark text-decoration-none">Steam
                                                Wash + Vacuum</a>
                                        </h5>
                                        <div class="gt-star small mt-2 mt-md-0">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="far fa-star text-warning"></i>
                                            <span class="ms-2 text-muted">(4.0)</span>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled mb-3 small">
                                        <li><i class="fas fa-check text-success me-2"></i> Waterless Eco Wash</li>
                                        <li><i class="fas fa-check text-success me-2"></i> Saves Time & Shine Foam </li>
                                        <li><i class="fas fa-check text-success me-2"></i> Exterior High Pressure Wash
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                        <div class="gt-price-list d-flex align-items-center gap-2">
                                            <span class="fw-bold fs-5 text-primary">₹149.00</span>
                                            <del class="text-danger">₹299.00</del>
                                        </div>
                                        <a href="#" class="text-primary fw-semibold text-decoration-underline fs-6">View
                                            Details</a>
                                        <a href="shop-cart.html"
                                            class="btn btn-primary rounded-pill px-4 fw-semibold">Add to Cart</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="gt-page-nav-wrap pt-5 text-center">
                    <ul>
                        <li><a class="gt-page-numbers" href="#"><i class="icon-icon-2"></i></a></li>
                        <li><a class="gt-page-numbers" href="#">01</a></li>
                        <li><a class="gt-page-numbers" href="#">02</a></li>
                        <li><a class="gt-page-numbers" href="#">03</a></li>
                        <li><a class="gt-page-numbers" href="#"><i class="icon-icon-1"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- SparkMyCar About Section Start -->

<!-- SparkMyCar Cta Service Section Start -->
<section class="gt-cta-service-section bg-cover" style="background-image: url('assets/img/home-2/cta-contact-bg.jpg');">
    <div class="container">
        <div class="gt-cta-service-wrapper">
            <div class="gt-section-title mb-0">
                <span class="wow fadeInUp multi-text"><img src="assets/img/icon/icon-24.svg" alt="img">Quick
                    Booking, Instant Support <img src="assets/img/icon/icon-24.svg" alt="img"></span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    Contact Us for Instant <br> Booking Support
                </h2>
            </div>
            <div class="gt-cta-right">
                <div class="gt-thumb">
                    <img src="assets/img/spark-my-car/service-man.png" alt="img" class="wow img-custom-anim-left">
                </div>
                <div class="gt-icon-items wow fadeInUp" data-wow-delay=".3s">
                    <div class="gt-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="gt-content">
                        <p>We are accessible. 24/7</p>
                        <h3><a href="tel:9026124100">+91 90261 24100</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog style-shop-details modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="gt-shop-details-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <!-- Outer Box -->
                            <div class="gt-shop-details-image p-2">


                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="ratio ratio-16x9" style="height:300px">
                                            <iframe src="https://www.youtube.com/embed/your-video-id" title="Video"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="pt-2 pb-2">Interior + Exterior Foam Wash</h3>

                                <div class="gt-price-list d-flex align-items-center gap-2 pt-4 pb-3">
                                    <span class="fw-bold fs-5 text-primary me-4">₹149.00</span>
                                    <p class="text-black">
                                        <i class="fas fa-clock text-black me-2"></i> 1 hr 21 mins
                                    </p>
                                </div>

                                <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                                    <h5 class="mb-0">What is include my Service?</h5>
                                    <h5 class="mb-0 text-primary ext-decoration-underline" style="cursor: pointer;">See
                                        all</h5>
                                </div>

                                <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">

                                    <div class="carousel-inner">

                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card h-100 text-center">
                                                        <img src="assets/img/inner/shop-details/details-01.jpg"
                                                            class="card-img-top" alt="Image 1"
                                                            style="height: 150px; object-fit: cover;">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Card Title 1</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card h-100 text-center">
                                                        <img src="assets/img/inner/shop-details/details-01.jpg"
                                                            class="card-img-top" alt="Image 2"
                                                            style="height: 150px; object-fit: cover;">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Card Title 2</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card h-100 text-center">
                                                        <img src="assets/img/inner/shop-details/details-01.jpg"
                                                            class="card-img-top" alt="Image 3"
                                                            style="height: 150px; object-fit: cover;">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Card Title 3</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="card h-100 text-center">
                                                        <img src="assets/img/inner/shop-details/details-01.jpg"
                                                            class="card-img-top" alt="Image 4"
                                                            style="height: 150px; object-fit: cover;">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Card Title 4</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card h-100 text-center">
                                                        <img src="assets/img/inner/shop-details/details-01.jpg"
                                                            class="card-img-top" alt="Image 5"
                                                            style="height: 150px; object-fit: cover;">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Card Title 5</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="card h-100 text-center">
                                                        <img src="assets/img/inner/shop-details/details-01.jpg"
                                                            class="card-img-top" alt="Image 6"
                                                            style="height: 150px; object-fit: cover;">
                                                        <div class="card-body">
                                                            <h6 class="card-title">Card Title 6</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="carousel-indicators mt-3">
                                        <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                    </div>


                                </div>



                            </div>
                        </div>

                        <div class="col-lg-6">


                            <div class="gt-shop-details-content">


                                <div class="row rounded p-3" style="background:#1151b1">
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-md-4">
                                            <h4 class="fw-bold mb-0 text-white">Local Car Washing Center</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="fw-bold text-warning mb-0 text-center">VS</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <h4 class="fw-bold text-warning mb-0 text-white">SparkMyCar</h4>
                                        </div>
                                    </div>

                                    <!-- Local Car Washing Center -->
                                    <div class="col-md-6 border-end mb-3 mb-md-0">
                                        <div class="text-center mb-5">
                                            <img src="assets/img/inner/shop-details/details-01.jpg"
                                                class="img-fluid rounded" alt="Local Car Washing Center"
                                                style="height:160px; width:260px; border: 2px solid white;">
                                        </div>
                                        <ul class="feature-list text-white">
                                            <li>
                                                <img width="24" height="24"
                                                    src="https://img.icons8.com/sf-regular-filled/48/FA5252/cancel.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    No doorstep service
                                                    <small>(Time wasted visiting center)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Basic exterior pressure wash
                                                    <small>(Surface cleaning only)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Vacuum only
                                                    <small>(No interior deep cleaning)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="24" height="24"
                                                    src="https://img.icons8.com/sf-regular-filled/48/FA5252/cancel.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    No dashboard or plastic polish
                                                    <small>(Dull interiors)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="24" height="24"
                                                    src="https://img.icons8.com/sf-regular-filled/48/FA5252/cancel.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    No ceramic coating in standard wash
                                                    <small>(Optional, extra cost)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="24" height="24"
                                                    src="https://img.icons8.com/sf-regular-filled/48/FA5252/cancel.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    No complimentary items
                                                    <small>(No air freshener, mats, tissue box)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="24" height="24"
                                                    src="https://img.icons8.com/sf-regular-filled/48/FA5252/cancel.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Local quality products used
                                                    <small>(No assurance)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="24" height="24"
                                                    src="https://img.icons8.com/sf-regular-filled/48/FA5252/cancel.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    No booking or support
                                                    <small>(Customer support unavailable)</small>
                                                </div>
                                            </li>
                                        </ul>


                                    </div>

                                    <!-- HOORA -->
                                    <div class="col-md-6">
                                        <div class="text-center mb-5">
                                            <img src="assets/img/inner/shop-details/details-01.jpg"
                                                class="img-fluid rounded" alt="SparkMyCar Car Wash"
                                                style="height:160px; width:260px;border: 2px solid white;">
                                        </div>


                                        <ul class="feature-list text-white">
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Doorstep professional setup
                                                    <small>(Saves time & effort)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    High-pressure wash & vacuum cleaning
                                                    <small>(Deep clean inside-out)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Full interior deep cleaning
                                                    <small>(Seats, dicky, roof)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Dashboard & trims polish
                                                    <small>(Fresh & shiny interior)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Hybrid ceramic coating
                                                    <small>(Long-lasting shine & protection)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Complimentary items
                                                    <small>(Air freshener, mats, cotton, tissue box)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Premium products & verified staff
                                                    <small>(Safe, professional care)</small>
                                                </div>
                                            </li>
                                            <li>
                                                <img width="20" height="20"
                                                    src="https://img.icons8.com/fluency-systems-filled/50/40C057/ok.png"
                                                    alt="ok">
                                                <div class="feature-text">
                                                    Live booking, tracking & customer support
                                                    <small>(Full accountability)</small>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <h3 class="mt-5 mb-3">Full-Face Helmets</h3>
                                <div class="row">
                                    <div class="faq-items mt-3 ms-0">
                                        <div class="accordion-item border-0">
                                            <h4 class="accordion-header" id="headingOne">
                                                <button
                                                    class="accordion-button collapsed d-flex justify-content-between"
                                                    type="button" onclick="event.preventDefault();">
                                                    <span class="text-black fw-bold fs-5">Frequently Asked
                                                        Questions</span>
                                                    <span class="toggle-icon ms-auto" role="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                        <i class="bi bi-chevron-right fw-bold" id="iconOne"></i>
                                                    </span>
                                                </button>
                                            </h4>

                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body mt-3">

                                                    <!-- Q1 -->
                                                    <div class="border rounded p-3 mb-3">
                                                        <h6 class="fw-semibold mb-2">Q1: What is included in a standard
                                                            car wash?</h6>
                                                        <hr>
                                                        <p class="mb-0">A standard wash includes exterior cleaning, tyre
                                                            wash, and basic interior vacuuming.</p>
                                                    </div>

                                                    <!-- Q2 -->
                                                    <div class="border rounded p-3 mb-3">
                                                        <h6 class="fw-semibold mb-2">Q2: How long does a full car
                                                            service take?</h6>
                                                        <hr>
                                                        <p class="mb-0">It usually takes 1 to 2 hours depending on the
                                                            package and car size.</p>
                                                    </div>

                                                    <!-- Q3 -->
                                                    <div class="border rounded p-3 mb-3">
                                                        <h6 class="fw-semibold mb-2">Q3: Do you provide doorstep car
                                                            wash service?</h6>
                                                        <hr>
                                                        <p class="mb-0">Yes, we provide doorstep services in selected
                                                            areas. Please check with our support.</p>
                                                    </div>

                                                    <!-- Q4 -->
                                                    <div class="border rounded p-3 ">
                                                        <h6 class="fw-semibold mb-2">Q4: What products do you use for
                                                            car cleaning?</h6>
                                                        <hr>
                                                        <p class="mb-0">We use premium quality, eco-friendly car care
                                                            products that are safe for your vehicle.</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Price Section -->
                                <div class="row mt-4 align-items-center">
                                    <!-- Left Column -->
                                    <div class="col-md-6 text-start">
                                        <h4 class="fw-bold text-primary mb-1">₹629</h4>
                                        <p class="text-muted mb-0 text-black">58 mins</p>
                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6 text-end">
                                        <button class="btn btn-dark">Back</button>
                                    </div>
                                </div>



                                <div class="cart-quantity">

                                    <a href="shop-details.html" class="shop-btn theme-btn">Add to cart</a>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<?php include('footer.php') ?>
<script>
    const collapseOne = document.getElementById('collapseOne');
    const iconOne = document.getElementById('iconOne');

    collapseOne.addEventListener('show.bs.collapse', function () {
        iconOne.classList.remove('bi-chevron-right');
        iconOne.classList.add('bi-chevron-down');
    });

    collapseOne.addEventListener('hide.bs.collapse', function () {
        iconOne.classList.remove('bi-chevron-down');
        iconOne.classList.add('bi-chevron-right');
    });
</script>