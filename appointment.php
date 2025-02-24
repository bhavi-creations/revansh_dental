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
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="index.php" class="h4 text-white">Home</a>
                <i class=" text-white px-2">/</i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


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
                        data-aos-delay="100"\>
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

   <!-- <div class="container wow slideInUp" data-wow-delay="0.6s">
   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30616.598239961408!2d80.58636234737176!3d16.421028089292626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOpposite%20Icici%20Bank%2C1st%20Floor%2CAbove%20Jawed%20Habeeb%2Cmangalagiri-Tenali%20Road%2CMangalagiri-522503!5e0!3m2!1sen!2sin!4v1740397070608!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
    
   </div> -->



   <div class="col-12 wow slideInUp" data-wow-delay="0.6s">
    <iframe class="position-relative rounded w-100 h-100"
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d30616.598239961408!2d80.58636234737176!3d16.421028089292626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOpposite%20Icici%20Bank%2C1st%20Floor%2CAbove%20Jawed%20Habeeb%2Cmangalagiri-Tenali%20Road%2CMangalagiri-522503!5e0!3m2!1sen!2sin!4v1740397070608!5m2!1sen!2sin"
        frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>
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
    

    <!-- Footer Start -->
    <?php
    include "./includes/footer.php";
    ?>
    <!-- Footer End -->


