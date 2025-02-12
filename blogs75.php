<?php include "./includes/header.php";
?>





  <main>
    <!-- Filter Buttons -->
    <div class="container">
      <div class="filter_buttons redirect_section mt-4">
        <!-- <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
        <a href="blogs.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
        <a href="blogs.php?service=Teeth Braces"><button class="redirect_blog_srivice">Teeth Braces</button></a>
        <a href="blogs.php?service=Pediatric Dentist"><button class="redirect_blog_srivice"> Pediatric Dentist</button></a>
        <a href="blogs.php?service=Paedodontist Doctors"><button class="redirect_blog_srivice">Paedodontist Doctors </button></a>
        <a href="blogs.php?service=Clear Aligners"><button class="redirect_blog_srivice"> Clear Aligners</button></a>
        <a href="blogs.php?service=Laminate Veneers"><button class="redirect_blog_srivice">Laminate Veneers</button></a>
        <a href="blogs.php?service=Crown Bridge"><button class="redirect_blog_srivice">Crown & Bridge</button></a>
        <a href="blogs.php?service=Dental Implant"><button class="redirect_blog_srivice">Dental Implant</button></a>
        <a href="blogs.php?service=Dentures Treatments"><button class="redirect_blog_srivice">Dentures Treatments</button></a>
        <a href="blogs.php?service=Invisalign"><button class="redirect_blog_srivice">Invisalign </button></a>
        <a href="blogs.php?service=Jaw Corrective"><button class="redirect_blog_srivice">Jaw Corrective</button></a>
        <a href="blogs.php?service=Laser Gum"><button class="redirect_blog_srivice">Laser & Gum</button></a>
        <a href="blogs.php?service=Smile Designing"><button class="redirect_blog_srivice">Smile Designing</button></a>
        <a href="blogs.php?service=Smile Makeover"><button class="redirect_blog_srivice">Smile Makeover</button></a>
        <a href="blogs.php?service=Teeth Alignment"><button class="redirect_blog_srivice"> Teeth Alignment</button></a>
        <a href="blogs.php?service=Tooth Extraction"><button class="redirect_blog_srivice">Tooth Extraction</button></a>
        <a href="blogs.php?service=Tooth Cleaning"><button class="redirect_blog_srivice">Tooth Cleaning</button></a>
        <a href="blogs.php?service=Gum Depigment"><button class="redirect_blog_srivice">Gum Depigment</button></a>
        <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
        <a href="blogs.php?service=Laser Gum Surgery"><button class="redirect_blog_srivice">Laser Gum Surgery</button></a>
        <a href="blogs.php?service=Mouth Ulcers"><button class="redirect_blog_srivice">Mouth Ulcers</button></a>
        <a href="blogs.php?service=Precancerous Lesion"><button class="redirect_blog_srivice">Precancerous Lesion</button></a>
        <a href="blogs.php?service=Laser Crown Lengthening"><button class="redirect_blog_srivice">Laser Crown Lengthening</button></a> -->
      </div>
    </div>

    <!-- Blogs Section -->
    <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
      <div class="row">
        <div class="col-lg-12">
          <div class="grid row">
            <?php
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
                echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
              }
            } else {
              echo "<p>No blog posts found.</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- ======= Footer ======= -->
  <?php include('./includes/footer.php'); ?>

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>




</body>

</html>

<?php
$stmt->close();
        $conn->close();
        ?>


<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top side_arrow"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script> 
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="lib/twentytwenty/jquery.event.move.js"></script>
<script src="lib/twentytwenty/jquery.twentytwenty.js"></script> 

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>