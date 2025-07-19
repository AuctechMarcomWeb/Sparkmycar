<style>
   
.gallery-scroll-wrapper {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    gap: 20px;
    scroll-snap-type: x mandatory;
    padding-bottom: 10px;
}

.gallery-scroll-wrapper::-webkit-scrollbar {
    display: none; 
}

.gallery-slide {
    flex: 0 0 auto;
    scroll-snap-align: start;
    width: 100%;
    max-width: 300px;
}

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


@media (min-width: 768px) {
    .gallery-scroll-wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        overflow: visible;
    }
    .gallery-slide {
        max-width: 100%;
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
<div class="gallery-section fix p-5 mb-4">
    <div class="container">
        <!-- Section Title -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="section-title">
                   
                    <h2 class="wow fadeInUp mt-4 mb-5" data-wow-delay=".3s">Gallery</h2>
                </div>
            </div>
        </div>

        <!-- Scrollable Gallery Wrapper -->
        <div class="gallery-scroll-wrapper">
            <?php
            include('db_con.php');
            $result = $con->query("SELECT image FROM gallery ORDER BY id DESC LIMIT 6");
            if ($result && $result->num_rows > 0):
                while ($row = $result->fetch_assoc()):
                    $image = htmlspecialchars($row['image']);
                    ?>
                    <div class="gallery-slide">
                        <div class="gallery-image">
                            <a href="admin/gallery_uploads/<?php echo $image; ?>" class="img-popup" title="View Image">
                                <div class="image-wrapper">
                                    <img src="admin/gallery_uploads/<?php echo $image; ?>" alt="gallery" class="img-fluid">
                                    <div class="icon">
                                        <i class="far fa-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                <p class="text-center">No Gallery Images found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php include('footer.php') ?>