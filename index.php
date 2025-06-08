<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit'])) {
    
    $bookingnum = mt_rand(100000000, 999999999);
    $pname = $_POST['pname'];
    $rname = $_POST['rname'];
    $phone = $_POST['phone'];
    $hdate = $_POST['hdate'];
    $htime = $_POST['htime'];
    $ambulancetype = $_POST['ambulancetype'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $message = $_POST['message'];
   
    $query = mysqli_query($con, "INSERT INTO tblambulancehiring (BookingNumber, PatientName, RelativeName, RelativeConNum, HiringDate, HiringTime, AmbulanceType, Address, City, State, Message) VALUES ('$bookingnum', '$pname', '$rname', '$phone', '$hdate', '$htime', '$ambulancetype', '$address', '$city', '$state', '$message')");

    if ($query) {
        echo "<script>alert('Your request has been sent successfully. Your Booking Number is: $bookingnum');</script>";
        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Emergancy Ambulance Hiring Portal</title>
 
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script>
    // Set the minimum date to today
    
   

    window.onload = function() {
        // Get the current date and time
        const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    // Format the min date and time as "YYYY-MM-DDTHH:MM"
    const minDateTime = `${year}-${month}-${day}`;
   // const minTime = `${hours}:${minutes}`;
    document.getElementById("hdate").setAttribute("min", minDateTime);
    //document.getElementById("htime").setAttribute("min", minTime);
    //alert(minDateTime)
    };
</script>

</head>

<body>

 <?php include_once('includes/header.php');?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</span></h2>
  
            <a href="#appointment" class="btn-get-started scrollto">Hire Ambulance</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</h2>
        
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Welcome to <span>Emergency Ambulance Hiring Portal</h2>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Life Support</a></h4>
         
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Medical Support</a></h4>
 
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Emergency Kit</a></h4>
         
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-baby"></i></div>
              <h4 class="title"><a href="">NICU Support
              </a></h4>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now?</h3>
          <a class="cta-btn scrollto" href="#appointment">Hire an Ambulance</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <p><?php  echo $row['PageDescription'];?></p><?php } ?>
        </div>

      

      </div>
    </section><!-- End About Us Section -->

    



    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hire an Ambulance</h2>
        </div>

        <form action="" method="post" role="form" class="form-control" data-aos="fade-up" data-aos-delay="100" id="patientForm">
  <div class="row" style="padding-top:20px">
    <div class="col-md-4 form-group">
      <input type="text" name="pname" class="form-control" id="pname" placeholder="Enter Patient Name" required pattern="^[A-Za-z\s]+$" title="Only letters and spaces are allowed for the name.">
      <small id="pnameError" class="text-danger" style="display:none;">Patient name should only contain letters and spaces.</small>
    </div>
    <div class="col-md-4 form-group">
      <input type="text" name="rname" class="form-control" id="rname" placeholder="Enter Relative Name" required pattern="^[A-Za-z\s]+$" title="Only letters and spaces are allowed for the relative's name.">
      <small id="rnameError" class="text-danger" style="display:none;">Relative name should only contain letters and spaces.</small>
    </div>

    <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Relative Phone Number" required pattern="^\d{10}$" maxlength="10" title="Phone number must be exactly 10 digits.">
      <small id="phoneError" class="text-danger" style="display:none;">Phone number must be exactly 10 digits.</small>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 form-group mt-3">
      <input type="date" name="hdate" class="form-control" id="hdate" placeholder="Hiring Date" required>
    </div>
    <div class="col-md-4 form-group mt-3">
      <input type="time" name="htime" class="form-control" id="htime" placeholder="Hiring Time" required>
    </div>
    <div class="col-md-4 form-group mt-3">
      <select name="ambulancetype" id="ambulancetype" class="form-select" required>
        <option value="">Select Type of Ambulance</option>
        <option value="1">Basic Life Support (BLS) Ambulances</option>
        <option value="2">Advanced Life Support (ALS) Ambulances</option>
        <option value="3">Non-Emergency Patient Transport Ambulances</option>
        <option value="4">Boat Ambulance</option>
      </select>
    </div>
  </div>

  <div class="row" style="padding-top:20px">
    <div class="col-md-4 form-group">
      <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required>
    </div>
    <div class="col-md-4 form-group">
      <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" required>
    </div>

    <div class="col-md-4 form-group mt-3 mt-md-0">
      <input type="text" class="form-control" name="state" id="state" placeholder="Enter State" required>
    </div>
  </div>

  <div class="form-group mt-3">
    <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
  </div>

  <div class="text-center" style="padding-top: 20px;padding-bottom: 20px;">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<!-- JavaScript for Date and Phone Number Validation -->
<script>
  // Ensure the hiring date is from today onwards
  document.getElementById('hdate').setAttribute('min', new Date().toISOString().split('T')[0]);

  // Real-time validation for Patient Name
  document.getElementById('pname').addEventListener('input', function() {
    const pname = document.getElementById('pname');
    const pnameError = document.getElementById('pnameError');
    const namePattern = /^[A-Za-z\s]+$/;
    if (!namePattern.test(pname.value)) {
      pnameError.style.display = "block";
    } else {
      pnameError.style.display = "none";
    }
  });

  // Real-time validation for Relative Name
  document.getElementById('rname').addEventListener('input', function() {
    const rname = document.getElementById('rname');
    const rnameError = document.getElementById('rnameError');
    const namePattern = /^[A-Za-z\s]+$/;
    if (!namePattern.test(rname.value)) {
      rnameError.style.display = "block";
    } else {
      rnameError.style.display = "none";
    }
  });

  // Real-time validation for Phone Number (limiting to 10 digits)
  document.getElementById('phone').addEventListener('input', function() {
    const phone = document.getElementById('phone');
    const phoneError = document.getElementById('phoneError');
    const phonePattern = /^\d{10}$/;
    
    // Only allow digits and limit input to 10 characters
    phone.value = phone.value.replace(/[^\d]/g, '');  // Remove non-digit characters

    if (phone.value.length > 10) {
      phone.value = phone.value.slice(0, 10); // Limit to 10 digits
    }

    if (!phonePattern.test(phone.value)) {
      phoneError.style.display = "block";
    } else {
      phoneError.style.display = "none";
    }
  });

  // Add custom validation for form submission
  document.getElementById('patientForm').addEventListener('submit', function(e) {
    // Clear previous error messages
    document.getElementById('pnameError').style.display = "none";
    document.getElementById('rnameError').style.display = "none";
    document.getElementById('phoneError').style.display = "none";

    let valid = true;

    // Validate phone number (on submit)
    const phoneField = document.getElementById('phone');
    const phonePattern = /^\d{10}$/;
    const phoneValue = phoneField.value;

    if (!phonePattern.test(phoneValue)) {
      document.getElementById('phoneError').style.display = "block";
      valid = false;
    }

    // Custom validation for names (should only contain letters and spaces)
    const namePattern = /^[A-Za-z\s]+$/;
    const pname = document.getElementById('pname').value;
    const rname = document.getElementById('rname').value;

    if (!namePattern.test(pname)) {
      document.getElementById('pnameError').style.display = "block";
      valid = false;
    }

    if (!namePattern.test(rname)) {
      document.getElementById('rnameError').style.display = "block";
      valid = false;
    }

    // Prevent form submission if validation fails
    if (!valid) {
      e.preventDefault(); // Prevent form submission
    }
  });
</script>


      </div>
    </section><!-- End Appointment Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>24/7 available</p>
        </div>

      </div>

  

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-12">

             <div class="row">
              <?php 
 $query=mysqli_query($con,"select * from  tblpage where PageType='contactus'");
 while ($row=mysqli_fetch_array($query)) {


 ?>
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p><?php  echo $row['PageDescription'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php  echo $row['Email'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><?php  echo $row['MobileNumber'];?></p>
                </div>
              </div><?php } ?>
            </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include_once('includes/footer.php');?>

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