<?php include('header.php') ?>
<!-- SparkMyCar Breadcrunb Section Start -->
<div class="gt-breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/breadcrumb-bg.jpg');">
    <div class="gt-right-shape">
        <img src="assets/img/breadcrumb-shape.jpg" alt="img">
    </div>
    <div class="container">
        <div class="gt-page-heading">
            <div class="gt-breadcrumb-sub-title">
                <h1 class="wow fadeInUp" data-wow-delay=".3s">CONTACT US</h1>
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
                    Contact Us
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- SparkMyCar Contact Section Start -->
<section class="gt-contact-section section-padding fix pb-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="contact-info-items">
                    <div class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h4>Email Address</h4>
                        <h6>
                            <a href="mailto:info@sparkmycar.com">
                                info@sparkmycar.com</a> <br>

                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="contact-info-items">
                    <div class="icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="content">
                        <h4>Our Address</h4>
                        <h6>
                            101/4 Mint Tower, Indira Nagar,
                            Lucknow, Uttar Pradesh, India– 226016
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="contact-info-items">
                    <div class="icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="content">
                        <h4>Phone Number</h4>
                        <h6>
                            <a href="tel:+91 9026124100">+91 9026124100</a> <br>

                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SparkMyCar Contact us Section Start -->
<section class="gt-contact-us-section section-padding pb-0 fix">
    <div class="container">
        <div class="gt-contact-us-wrapper">
            <h2>Get In Touch</h2>
            <form method="POST" action="save_contact.php" id="enquiryForm">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-clt">
                            <span>Your Name</span>
                            <input type="text" name="name" id="name" placeholder="Full Name*">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-clt">
                            <span>Mobile Number</span>
                            <input type="number" name="phone" id="phone" placeholder="Enter Mobile Number*">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Your Email</span>
                            <input type="email" name="email" id="email" placeholder="Your Email*">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Your Message</span>
                            <textarea name="message" id="message" placeholder="Message Here*"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-btn">
                            <button type="submit" name="submit" class="gt-theme-btn">
                                <span class="gt-text-btn">
                                    <span class="gt-text-2">SEND MESSAGE</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- SparkMyCar Map Section Start -->
<div class="gt-map-section">
    <div class="gt-map-items">
        <div class="googpemap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.4805872737616!2d80.97793027600065!3d26.888238861140838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957be8139e0cb%3A0xfb2241c78b7a2307!2sMint%20Tower!5e0!3m2!1sen!2sin!4v1752919069591!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<?php include('footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    document.getElementById('enquiryForm').addEventListener('submit', function (e) {
        e.preventDefault();

        var form = this;
        var phone = document.getElementById('phone').value.trim();
        if (phone.length !== 10 || isNaN(phone)) {
            Swal.fire({
                title: 'Invalid Phone',
                text: 'Please enter a valid 10-digit mobile number.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            document.getElementById('phone').focus();
            return;
        }

        var formData = new FormData(form);

        fetch('save_contact.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(result => {
                if (result.trim() === 'success') {
                    Swal.fire({
                        title: 'Thank You!',
                        text: 'Your message has been successfully sent.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        form.reset();
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                Swal.fire({
                    title: 'Error!',
                    text: 'Something went wrong.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
    });
</script>