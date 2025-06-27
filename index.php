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


<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="assets/img/service_image/revansh.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <!-- <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1>
                        <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                        <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/service_image/revansh_equipment.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <!-- <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1>
                        <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                        <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div> -->
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="assets/img/service_image/revansh_equipment1.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <!-- <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1>
                        <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                        <a href="contact.php" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                    </div> -->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->




<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                    <h1 class="display-5 mb-0">The Best Dental Clinic That You Can Trust</h1>
                </div>
                <h4 class="text-body fst-italic mb-4">When it comes to your oral health, choosing the right dental clinic is essential. At Revansh Dental & Physiotherapy, we are committed to providing top-quality dental care with advanced technology, experienced professionals, and a patient-first approach.</h4>
                <!-- <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p> -->
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>experienced team</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                    </div>
                </div>
                <a href="appointment.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about_doctor.png" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Appointment Start -->
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4 about_dental">Revansh Dental Hospital,</h1>
                    <p class="text-white mb-0">we are proud to be a certified dental clinic, ensuring the highest standards of safety, hygiene, and patient care. Our expert team follows international dental protocols, using advanced technology to provide safe, effective, and painless treatments for all your dental needs..</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Make Appointment</h1>
                    <form action="appointmentform.php" method="post" role="form" class="php-email-form"
                        data-aos-delay="100">
                        <div class="row g-3">
                            <!-- <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div> -->
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                            </div>


                            <div class="col-12 col-sm-6">
                                <input type="text" name="number" class="form-control bg-light border-0" placeholder="Contact" style="height: 55px;">
                            </div>


                            <div class="col-12 col-sm-6">
                                <select class="form-select bg-light border-0" name="service" style="height: 55px;">
                                    <option selected>Select Service</option>
                                    <option value="Dental implants">Dental implants</option>
                                    <option value="Smile designing ">Smile designing </option>
                                    <option value="Laser Dental Treatment">Laser Dental Treatment</option>
                                    <option value="Invisible aligners ">Invisible aligners </option>
                                    <option value="Teeth whitening">Teeth whitening</option>
                                    <option value="Teeth cleaning">Teeth cleaning</option>
                                    <option value="Teeth jewellery">Teeth jewellery</option>
                                    <option value="root canal">root canal</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" name="date"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="time" id="time1" data-target-input="nearest">
                                    <input type="text" name="time"
                                        class="form-control bg-light border-0 datetimepicker-input"
                                        placeholder="Appointment Time" data-target="#time1" data-toggle="datetimepicker" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Make Appointment</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">

            <div class="col-lg-7">
                <div class="section-title mb-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                    <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                </div>
                <div class="row g-5">




                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0"><a href="dental_implants.php">Dental Implants</a></h5>
                        </div>
                    </div>


                    <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="position-relative bg-light rounded-bottom text-center p-4">
                            <h5 class="m-0"> <a href="teeth_whitening.php">Teeth Whitening</a> </h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/before.jpg" style="object-fit: cover;">
                    <img class="position-absolute w-100 h-100" src="img/after.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">

            <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.3s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="assets/img/revansh/invisible_aligners.png" alt="">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0"> <a href="invisible_aligners.php">Invisible Aligners</a></h5>
                </div>
            </div>
            <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="assets/img/revansh/teeth_whitening.png" alt="">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0"> <a href="teeth_whitening.php"> Teeth Whitening</a> </h5>
                </div>
            </div>
            <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.6s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="assets/img/revansh/teeth_jewellery.png" alt="">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0"> <a href="teeth_jewellery.php"> Teeth Jewellery</a> </h5>
                </div>
            </div>

        </div>


        <!-- <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div> -->




    </div>

</div>
</div>
<div class="service_content_view zoomIn ">

    <a href="service.php" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">View More <i class="bi bi-arrow-right "></i></a>

</div>

</div>
</div>
<!-- Service End -->


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                <div class="offer-text text-center rounded p-5">
                    <h1 class="display-5 text-white">Revansh Dental Hospital</h1>
                    <p class="text-white mb-4"> we are committed to providing advanced, painless, and affordable dental care with a patient-first approach. Our experienced team of dentists specializes in cosmetic, restorative, and preventive dentistry, ensuring healthy and confident smiles for all.

                    </p>
                    <!-- <a href="appointment.php" class="btn btn-dark py-3 px-5 me-3">Appointment</a>
                    <a href="contact.php" class="btn btn-light py-3 px-5">Contact us</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Pricing Start -->
<!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                        <h1 class="display-5 mb-0">We Offer Fair Prices for Dental Treatment</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo eirmod magna dolore erat amet</p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+012 345 6789</h1>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/price-1.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$35</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Teeth Whitening</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/price-2.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$49</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Dental Implant</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/price-3.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$99</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Root Canal</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Modern Equipment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Professional Dentist</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Pricing End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-5">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentist</h5>
                    <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                    <a href="appointment.php" class="btn btn-primary py-3 px-5">Appointment</a>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="img/doctor1.png" alt="">
                        <!-- <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div> -->
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">Dr. P. Indeevar Reddy</h4>
                        <p class="text-primary mb-0">B.D.S.,M.D.S <br> (periodonist & Implantologist) </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="position-relative rounded-top" style="z-index: 1;">
                        <img class="img-fluid rounded-top w-100" src="img/doctor2.png" alt="">
                        <!-- <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div> -->
                    </div>
                    <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                        <h4 class="mb-2">Dr. k. Hanisha Reddy</h4>
                        <p class="text-primary mb-0">B.D.S.,M.D.S.(Endodontist) <br> Assoc.Prof.Govt.dental collage </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-11.png" alt="">
                        <p class="fs-5">A very good experience at Revansh Dental clinic , very good at detail and accomodative for quick turn around . Dentist are very knowledgeable and adept at the dental craft ,very patient in answering all questions</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Mani kumar malladi </h4>
                    </div>
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-22.png" alt="">
                        <p class="fs-5">Recently i suffering with wisdom tooth pain ,so I check for best dental clinic in Mangalagiri .one of my friend suggested me this clinic and went to clinic .the dentist explain about procedure of extraction teeth</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Venkata Reddy</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->










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
    </div> -->
<!-- Newsletter End -->





<section class="blog_section  py-5">
    <div class="container">
        <div class="section-title text-center">

            <h2 class="ask_heading mb-5">Blogs & articles </h2>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <?php
            include './db.connection/db_connection.php';

            // Fetch latest 3 blogs with video
            $sql = "SELECT id, title, main_content, main_image, video FROM blogs ORDER BY created_at DESC LIMIT 3";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<div class='row'>"; // Start row for card layout

                while ($row = $result->fetch_assoc()) {
                    $blog_id = $row['id'];
                    $title = $row['title'];
                    $main_content = $row['main_content'];
                    $main_image = $row['main_image'];
                    $video = $row['video'];

                    echo "<div class='col-md-4 mb-4'>"; // Create 3 equal-width columns for medium devices
                    echo "<div class='card h-100'>"; // Start card

                    // Display the blog title
                    echo "<div class='card-body'>";


                    // Display video if available
                    if (!empty($video)) {
                        $video_path = "./admin/uploads/videos/{$video}";
                        echo "<video class='main-video img-fluid' controls>
                    <source src='{$video_path}' type='video/mp4'>
                    Your browser does not support the video tag.
                  </video>";
                    }
                    // If no video, display main image
                    elseif (!empty($main_image)) {
                        $main_image_path = "./admin/uploads/photos/{$main_image}";
                        echo "<img class='card-img-top img-fluid' src='{$main_image_path}' alt='Blog Image'>";
                    }
                    echo "<h5 class='card-title my-3'>" . htmlspecialchars($title) . "</h5>";
                    // Display a short portion of the blog content
                    echo "<p class='card-text'>" . substr($main_content, 0, 90) . "...</p>";

                    // Link to full blog post
                    echo "<a href='fullblog.php?id={$blog_id}' class='btn btn-primary'>Read more</a>";

                    echo "</div>"; // End card body
                    echo "</div>"; // End card
                    echo "</div>"; // End column
                }

                echo "</div>"; // End row
            } else {
                echo "No blog posts found.";
            }

            $conn->close();
            ?>



            <div class="mt-5 d-none d-md-block">
                <a href="blogs.php" style="text-decoration: none;">
                    <p class="view_more_btn mb-5 d-flex flex-row justify-content-start">View More &nbsp;&nbsp;<i class="bi bi-arrow-right text-primary me-2"></i>
                    </p>
                </a>
            </div>

            <div class="d-flex flex-row justify-content-center mt-4">
                <a href="blogs.php" style="text-decoration: none;">
                    <p class="view_more_btn d-md-none">View More<i class="bi bi-arrow-right "></i></p>
                </a>
            </div>

        </div>
    </div>

</section>


<section class="faq_entire_section">
    <div class="container">

        <h1 class="text-center">Frequently Ask Question (FAQ)</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="accordion">
                    <!-- Accordion 1 -->
                    <div class="faq_section">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section">What is a root canal and when is it needed?
                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                A root canal is a dental procedure that removes infected pulp from inside a tooth. It's needed when tooth decay or injury causes pain, swelling, or sensitivity in the tooth </p>
                        </div>
                    </div>
                    <!-- Accordion 2 -->
                    <div class="faq_section">

                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section"> Are dental implants better than dentures?
                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                Yes, dental implants are a more permanent and natural-looking solution compared to dentures. They don't slip, last longer, and help preserve jawbone health </p>
                        </div>
                    </div>



                    <!-- Accordion 3 -->
                    <div class="faq_section">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section">How often should I visit the dentist for a check-up?
                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                It’s recommended to visit your dentist every 6 months for a routine check-up and cleaning. Early detection helps prevent serious dental issues </p>
                        </div>
                    </div>

                    <!-- Accordion 4 -->







                    <div class="faq_section">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section"> Where is Revansh Dental Clinic and how can I book an appointment?
                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                We are located in central Mangalagiri with easy access. Appointments can be booked by calling us or through our website. Walk-ins are also welcome for most services </p>
                        </div>
                    </div>

                    <!-- Accordion 5 -->
                    <!-- <div class="faq_section">
              <div class="accordion-header" onclick="toggleAccordion(this)">
                <h2  class="faq_heading_section" >Can cancer be prevented?
                </h2>
                <h2 class="accordion-icon">+</h2>
              </div>
              <div class="accordion-content">
                <p>
                  Not all cancers are preventable, but up to 30-50% of cases can be avoided through healthy lifestyle choices, regular screenings, vaccinations (like HPV), and avoiding carcinogens such as tobacco and processed foods
                </p>
              </div>
            </div> -->

                </div>

            </div>
            <div class="col-12 col-md-6">


                <div class="accordion">
                    <!-- Accordion 1 -->
                    <div class="faq_section">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section"> Do you offer dental implants at Revansh Dental Clinic, Mangalagiri?
                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                Yes, we provide safe and affordable dental implants in Mangalagiri. Our implantologist uses high-quality materials to restore missing teeth with lasting results </p>
                        </div>
                    </div>
                    <!-- Accordion 2 -->
                    <div class="faq_section">

                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section"> Who performs root canal treatment at your clinic?

                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                Root canal procedures at Revansh Dental Clinic are performed by a trained endodontist using advanced rotary and digital equipment for precise and painless results </p>
                        </div>
                    </div>



                    <!-- Accordion 3 -->
                    <div class="faq_section">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section"> Is Revansh Dental Clinic suitable for children’s dental care?

                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                Yes, our clinic offers child-friendly dental services in Mangalagiri. From cavity fillings to preventive care, we ensure a gentle experience for kids </p>
                        </div>
                    </div>
                    <!-- Accordion 4 -->
                    <div class="faq_section">
                        <div class="accordion-header" onclick="toggleAccordion(this)">
                            <h2 class="faq_heading_section">Is a root canal painful?

                            </h2>
                            <h2 class="accordion-icon">+</h2>
                        </div>
                        <div class="accordion-content">
                            <p>
                                With modern techniques and local anesthesia, root canal treatment is typically painless. Patients may feel mild discomfort after the procedure, which subsides quickly
                            </p>
                        </div>
                    </div>
                    <!-- Accordion 5 -->
                    <!-- <div class="faq_section">
              <div class="accordion-header" onclick="toggleAccordion(this)">
                <h2 class="faq_heading_section"> Can cancer be cured if detected early?
                </h2>
                <h2 class="accordion-icon">+</h2>
              </div>
              <div class="accordion-content">
                <p>
                  Yes, many types of cancer can be effectively treated or even cured if detected at an early stage. Regular screenings, awareness of symptoms, and early intervention improve survival rates significantly
                </p>
              </div>
            </div> -->

                </div>
            </div>
        </div>
    </div>
</section>





<script>
    function toggleAccordion(header) {
        const content = header.nextElementSibling;
        const icon = header.querySelector(".accordion-icon");

        content.classList.toggle("open");
        icon.classList.toggle("rotate");

        icon.textContent = content.classList.contains("open") ? "−" : "+";
    }
</script>













<!-- Footer Start -->
<?php
include "./includes/footer.php";
?>
<!-- Footer End -->


<!-- Back to Top -->