<?php include('header.php') ?>
<style>
    .text-center {
        color: #1151b1;
    }

    .ohter-brand {
        padding: 15px 23px !important;
        border-radius: 50px !important;
    }

    .modal-common-wrap .modal-dialog.style-shop-details {
        max-width: 680px;
    }

    .gt-shop-details-wrapper .gt-shop-details-content {
        margin-left: 4px;
    }

    .form-control:focus {
        color: var(--bs-body-color);
        background-color: var(--bs-body-bg);
        border-color: none;
        outline: 0;
        box-shadow: none;
    }

    .form-select:focus {
        color: var(--bs-body-color);
        background-color: var(--bs-body-bg);
        border-color: none;
        outline: 0;
        box-shadow: none;
    }

    .form-control {
        padding: 10px 11px;
        border: 1px solid #0828587a;
    }

    .form-label {
        margin-bottom: .5rem;
        color: #0b2448;
        font-weight: bold;
    }

    .gt-shop-details-wrapper .gt-shop-details-content .cart-quantity .shop-btn {
        width: 25%;
        padding: 17px 19px;
    }

    .form-select {
        padding: 10px 11px;
        border: 1px solid #0828587a;
    }
</style>
<div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog style-shop-details modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="gt-shop-details-wrapper">
                    <div class="row g-4">

                        <div class="col-lg-12">
                            <div class="gt-shop-details-content">
                                <h3>Add Other Model</h3>
                                <hr>
                                <form action="">
                                    <div class="row">

                                        <div class="col-lg-6 mb-4">
                                            <label for="car_brand_name" class="form-label">Car Brand Name</label>
                                            <select class="form-select" name="car_brand_name" id="car_brand_name">
                                                <option value="">Select Car Brand</option>
                                                <option value="Maruti">Maruti</option>
                                                <option value="Hyundai">Hyundai</option>
                                                <option value="Tata">Tata</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Toyota">Toyota</option>

                                            </select>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <label for="car_model_name" class="form-label">Car Model Name</label>
                                            <select class="form-select" name="car_model_name" id="car_model_name">
                                                <option value="">Select Car Model</option>
                                                <option value="Swift">Swift</option>
                                                <option value="i20">i20</option>
                                                <option value="Nexon">Nexon</option>
                                                <option value="City">City</option>
                                                <option value="Fortuner">Fortuner</option>

                                            </select>
                                        </div>



                                        <div class="col-lg-6 mb-3">
                                            <label for="car_or_bike_number" class="form-label">Car or Bike
                                                Number</label>
                                            <input type="text" class="form-control" name="car_or_bike_number"
                                                id="car_or_bike_number" placeholder="Enter Car or Bike Number">
                                        </div>


                                        <div class="col-lg-6 mb-3">
                                            <label for="photo" class="form-label">Upload Photo</label>
                                            <input type="file" class="form-control" name="photo" id="photo">
                                        </div>
                                    </div>

                                </form>

                                <div class="cart-quantity text-end">
                                    <a href="packages" class="shop-btn theme-btn">Submit</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SparkMyCar Breadcrunb Section Start -->
<div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-bg.jpg');">
    <div class="gt-right-shape">
        <img src="assets/img/breadcrumb-shape.jpg" alt="img">
    </div>
    <div class="container">
        <div class="gt-page-heading">
            <div class="gt-breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Choose Your Vehicle Model</h1>
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
                    Choose Your Vehicle Model
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- GT Shop Section Start -->
<section class="gt-shop-section fix section-padding">
    <div class="container">
        <div class="gt-shop-notices-wrapper mb-5">
            <div class="gt-shop-showing">

                <h2 class="multi-text">All Models</h2>
            </div>
            <div class="form-clt">
                <div class="form">
                    <div class="input-group">

                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search"></i>
                        </span>

                        <input type="text" class="form-control border-start-0 p-2" placeholder="Search...">
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-content">
            <div id="grid" class="tab-pane fade show active">
                <div class="row bold-black-border">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages">
                            <div class="gt-shop-card-items bg-style">
                                <div class="gt-shop-image">
                                    <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                                </div>
                            </div>
                            <h4 class="text-center p-3">Baleno</h4>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="gt-shop-card-items bg-style">
                            <a href="packages"></a>
                            <div class="gt-shop-image">
                                <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                            </div>
                        </div>
                        <h4 class="text-center p-3">Swift</h4>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages">
                            <div class="gt-shop-card-items bg-style">
                                <div class="gt-shop-image">
                                    <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                                </div>
                            </div>
                            <h4 class="text-center p-3">Dzire</h4>
                        </a>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages">
                            <div class="gt-shop-card-items bg-style">
                                <div class="gt-shop-image">
                                    <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                                </div>
                            </div>
                            <h4 class="text-center p-3">Wagon R</h4>
                        </a>

                    </div>
                </div>
                <div class="row bold-black-border">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages">
                            <div class="gt-shop-card-items bg-style">
                                <div class="gt-shop-image">
                                    <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                                </div>
                            </div>
                            <h4 class="text-center p-3">Alto</h4>
                        </a>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages">
                            <div class="gt-shop-card-items bg-style">
                                <div class="gt-shop-image">
                                    <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                                </div>
                            </div>
                            <h4 class="text-center p-3">Grand Vitara</h4>
                        </a>

                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages"></a>
                        <div class="gt-shop-card-items bg-style">
                            <div class="gt-shop-image">
                                <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                            </div>
                        </div>
                        <h4 class="text-center p-3">Ignis</h4>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <a href="packages">
                            <div class="gt-shop-card-items bg-style">
                                <div class="gt-shop-image">
                                    <img src="assets/img/home-1/shop/shop-01.png" alt="img">

                                </div>
                            </div>
                            <h4 class="text-center p-3">Ciaz</h4>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col text-end">
                <a href="#" class="gt-theme-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    <span class="gt-text-btn gt-bg-theme-color ohter-brand">
                        <span class="gt-text-2">Add Other Model</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>



<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<?php include('footer.php') ?>