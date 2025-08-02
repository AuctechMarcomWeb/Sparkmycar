<?php include('header.php') ?>
<style>
    .vehicle-card {
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 17px;
    }

    .vehicle-card.selected {
        background: linear-gradient(to right, #000000, #1170ff);
        color: white;
        border: 2px solid #1a73e8;
    }

    .vehicle-card.selected h4,
    .vehicle-card.selected p {
        color: white !important;
    }

    .bg-success {
        --bs-bg-opacity: 1;
        background-color: #18b529 !important;
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
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Choose Your Vehicle Type</h1>
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
                    Choose Your Vehicle Type
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="container py-5  section-padding">
    <!-- Title -->
    <div class="text-start mb-4">
        <h2 class="fw-bold">Choose Your <br>Vehicle Type</h2>
    </div>

    <!-- Cards Row -->
    <div class="row g-4 mt-5">

        <!-- 4 Wheeler Card -->
        <div class="col-md-6">
            <a href="4-wheeler-brand">
                <div class="card h-100 shadow-sm border rounded-3 vehicle-card position-relative" data-type="4w">
                    <div class="row g-0 align-items-center">
                        <div class="col-6">
                            <div class="p-3 ps-4">
                                <span
                                    class="badge bg-success selected-badge position-absolute top-0 start-1 m-2 d-none  mt-3 mb-3">
                                    <i class="bi bi-check-circle me-1"></i> Selected
                                </span>
                                <p class="mb-1 text-warning fw-semibold mt-5">I have a</p>
                                <h4 class="fw-bold mt-2">4 WHEELER</h4>
                            </div>
                        </div>
                        <div class="col-6 text-end mt-2">
                            <img src="assets/img/home-1/hero/hero-2.png" class="img-fluid p-2" alt="4 Wheeler">
                        </div>
                    </div>


                </div>
            </a>
        </div>

        <!-- 2 Wheeler Card -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border rounded-3 vehicle-card position-relative" data-type="4w">
                <div class="row g-0 align-items-center">
                    <div class="col-6">
                        <div class="p-3 ps-4">
                            <span
                                class="badge bg-success selected-badge position-absolute top-0 start-1 m-2 d-none  mt-3 mb-3">
                                <i class="bi bi-check-circle me-1"></i> Selected
                            </span>
                            <p class="mb-1 text-warning fw-semibold mt-5">I have a</p>
                            <h4 class="fw-bold mt-2">2 WHEELER / BIKE</h4>
                        </div>
                    </div>
                    <div class="col-6 text-end mt-2">
                        <img src="assets/img/home-1/hero/hero-2.png" class="img-fluid p-2" alt="4 Wheeler">
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>





<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<?php include('footer.php') ?>

<script>
    document.querySelectorAll('.vehicle-card').forEach(card => {
        card.addEventListener('click', function () {

            document.querySelectorAll('.vehicle-card').forEach(c => {
                c.classList.remove('selected');
                c.querySelector('.selected-badge').classList.add('d-none');
            });


            this.classList.add('selected');
            this.querySelector('.selected-badge').classList.remove('d-none');


            const type = this.getAttribute('data-type');
            setTimeout(() => {
                window.location.href = `brand.php?type=${type}`;
            }, 600);
        });
    });
</script>