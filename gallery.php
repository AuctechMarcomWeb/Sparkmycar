<style>
    .gallery-image {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
    }

    .gallery-image .image-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 12px;
    }

    .gallery-image img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 12px;
        transition: transform 0.4s ease;
    }

    .gallery-image .icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        background: rgba(0, 0, 0, 0.6);
        padding: 14px;
        border-radius: 50%;
        transition: transform 0.3s ease, opacity 0.3s ease;
        opacity: 0;
    }

    .gallery-image:hover img {
        transform: scale(1.05);
    }

    .gallery-image:hover .icon {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }

    .gallery-image .icon i {
        color: #fff;
        font-size: 18px;
    }

    @media (max-width: 576px) {
        .gallery-image img {
            height: 190px;
        }
    }
</style>
<?php include('header.php') ?>
<div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-bg.jpg');">
    <div class="gt-right-shape">
        <img src="assets/img/breadcrumb-shape.jpg" alt="img">
    </div>
    <div class="container">
        <div class="gt-page-heading">
            <div class="gt-breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">Gallery</h1>
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
                    Gallery
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="gallery-section fix section-padding">
    <div class="container">

       
        <div class="row g-4">
            <?php
            include('db_con.php');
            $result = $con->query("SELECT image FROM gallery");

            if ($result && $result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
                    $image = htmlspecialchars($row['image']);
                    ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-6">
                        <div class="gallery-image wow fadeInUp" data-wow-delay=".3s">
                            <a href="admin/gallery_uploads/<?php echo $image; ?>" class="img-popup" title="">
                                <div class="image-wrapper">
                                    <img src="admin/gallery_uploads/<?php echo $image; ?>" alt="gallery" class="img-fluid">
                                    <div class="icon">
                                        <i class="far fa-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                endwhile;
            else:
                ?>
                <div class="col-12 text-center">
                    <p>No Gallery Images found.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php include('footer.php') ?>