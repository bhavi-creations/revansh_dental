<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revansh Dental & physiotherapy</title>
   <link href="assets/img/logo/logo.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

   
    <!-- animation  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->




    








</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid  pe-0 d-none d-lg-block first_nav px-5">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2 small_text"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - sat : 10.00 am - 8.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2  text-white ">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>revanshdentalphysiotherapy@gmail.com</p>
                    </div>
                    <div class="py-2  text-back ">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+9493346026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 my-2">
    <a href="index.php" class="navbar-brand p-0 d-none d-md-block ">
        <img src="assets/img/logo/logo.png" alt="" class="img-fluid my-1 ">
    </a>


    <a href="index.php" class="navbar-brand p-0 d-md-none ">
        <img src="assets/img/logo/logo.png" alt="" class="img-fluid my-1 " style="width: 200px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link active">About</a>

            <!-- Service Dropdown -->
            <div class="nav-item dropdown">
                <a href="service.php" class="nav-link dropdown-toggle" id="serviceMenu">Service</a>
                <div class="dropdown-menu rounded-0 m-0 header_nav" id="serviceDropdown">
                    <a href="dental_implants.php" class="dropdown-item">Dental Implants</a>
                    <a href="smile_designing.php" class="dropdown-item">Smile Designing</a>
                    <a href="laser_treatment.php" class="dropdown-item">Laser Dental Treatment</a>
                    <a href="invisible_aligners.php" class="dropdown-item">Invisible Aligners</a>
                    <a href="teeth_whitening.php" class="dropdown-item">Teeth Whitening</a>
                    <a href="teeth_cleaning.php" class="dropdown-item">Teeth Cleaning</a>
                    <a href="teeth_jewellery.php" class="dropdown-item">Teeth Jewellery</a>
                    <a href="root_canal.php" class="dropdown-item">Root Canal</a>
                </div>
            </div>

            <a href="blogs.php" class="nav-item nav-link">Blogs</a>
            <a href="contact.php" class="nav-item nav-link">Contact</a>
        </div>

        <a href="appointment.php" class="btn btn-primary py-2 px-4 ms-3">Appointment</a>
    </div>
</nav>


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get elements
    const serviceMenu = document.getElementById("serviceMenu");
    const serviceDropdown = document.getElementById("serviceDropdown");

    // Check for small screen size
    function isMobileView() {
        return window.innerWidth <= 991;
    }

    // Toggle dropdown on click in mobile view
    serviceMenu.addEventListener("click", function (event) {
        if (isMobileView()) {
            event.preventDefault(); // Prevent default link behavior
            serviceDropdown.classList.toggle("show"); // Toggle dropdown visibility
        }
    });

    // Close the dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!serviceMenu.contains(event.target) && !serviceDropdown.contains(event.target)) {
            serviceDropdown.classList.remove("show");
        }
    });
});
</script>




