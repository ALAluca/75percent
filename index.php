<?php 
   session_start();

   include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Go Back</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="GS\style.css">
    <title>GNC DriveHub</title>
    
    <link rel="shortcut.icon"  href="icon.svg" type="image/x-icon">

    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <section id="menu" class="container">
        <div class="row">
            <div class="col-sm">
                <div class="topnav" id="myTopnav">
                    <a href="#home" class="active">
                    <span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
                    <span style="color: #867777;">DRIVEHUB</span>
                    </a>
                    <a href="#news">News</a>
                    <a href="#contact">Contact</a>
                    <a href="#about">About Us</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
                  </div>
            </div>
        </div>
    </section>
    <div class="container" id="background"> 
        <img src="img/GNCbg.jpg" alt="">
    </div>

    <section id="main" class="container">
        <div class="row container">
            <div class="col-sm">
                <img src="img/GNC.png" alt="GNC.png" class="gnc">
                <h1 class="m1">
                    <span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
                    <span style="color: #867777;">DRIVEHUB</span>
                </h1>
                <p class="m2">GNCDriveHub helps you get everywhere, easier by making it fast and convenient to find and reserve parking in Guagua National Park.</p>
            </div>
        </div>
    </section>
    

    <section id="login" class="container">
        <div class="container">
            <div class="row box form-box">
                <img src="img/GNCLogoHD.png" alt="GNCLogoHD">
                <header>Account</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" placeholder="ali@gnc.edu.ph" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" placeholder="Enter Password" required>
                    </div>

                    <div class="field">
                    
                        <input type="submit" class="btn" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Don't have account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
            <?php } ?>
        </div>
    </section>

    <section id="bitis">
        <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: #21D192"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/Lt.Abdulrahman" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold"><span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
                    <span style="color: #867777;">DRIVEHUB</span></h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
            ParkMobile puts the power to park in your hands. Whether you're looking for a spot now or reserving a spot for later, 
            ParkMobile has you covered.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Location</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Guagua National College</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Guagua</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Pampanga</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Support</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Login/sign up</a>
            </p>
            <p>
              <a href="#!" class="text-dark">About Us</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Social</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Guagua, Pampanga, PH</p>
            <p><i class="fas fa-envelope mr-3"></i> gncdrivehub@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 047 1551</p>
            <p><i class="fas fa-print mr-3"></i> + 0921 530 7561</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/"
         >GNCDrivehub.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
    </section>

</body>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
             x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</html>