<?php
include "./includes/header.php";
?>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->


<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Contact Us</h1>
            <a href="index.php" class="h4 text-white">Home</a>
            <i class=" text-white px-2">/</i>
            <a href="" class="h4 text-white">Contact</a>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-5">
                    <div class="section-title">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                        <h1 class="display-6 mb-4"> Contact Us</h1>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Revansh Dental Hospital</h5>
                            <span>Opposite Icici Bank,1st Floor,Above Jawed Habeeb,mangalagiri-Tenali Road,Mangalagiri-522503</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Email Us</h5>
                            <span>revanshdentalphysiotherapy@gmail.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                        <div class="text-start">
                            <h5 class="mb-0">Call Us</h5>
                            <span>+91-9493346026, 9666289499</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form action="contactform.php" method="post" role="form" class="php-email-form">
                    <div class="row g-3">
                        <div class="col-6">
                            <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="number" name="number" class="form-control border-0 bg-light px-4" placeholder="number" style="height: 55px;">
                        </div>
                        <div class="control-group">
                                <textarea class="form-control" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                              
                            </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Newsletter Start -->
<!-- <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  -->
<!-- Newsletter End -->

<div class="col-12 wow slideInUp" data-wow-delay="0.6s">
    <iframe class="position-relative rounded w-100 h-100"
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30616.598239961408!2d80.58636234737176!3d16.421028089292626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOpposite%20Icici%20Bank%2C1st%20Floor%2CAbove%20Jawed%20Habeeb%2Cmangalagiri-Tenali%20Road%2CMangalagiri-522503!5e0!3m2!1sen!2sin!4v1740397070608!5m2!1sen!2sin"
        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>






<!-- <div class="col-12 wow slideInUp" data-wow-delay="0.6s">
    <iframe class="position-relative rounded w-100 h-100"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div> -->

<!-- Footer Start -->
<?php
include "./includes/footer.php";
?>
<!-- Footer End -->


<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> -->


<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="lib/twentytwenty/jquery.event.move.js"></script>
<script src="lib/twentytwenty/jquery.twentytwenty.js"></script> -->

<!-- Template Javascript -->
<!-- <script src="js/main.js"></script>
</body>

</html> -->