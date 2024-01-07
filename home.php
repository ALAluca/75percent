<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/style.css">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>

<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="home.php" class="logo">
          <span style="color: rgba(3, 68, 2, 0.90);">GNC</span>
          <span style="color: #867777;">DRIVEHUB</span>
        </a></li>
        <li><a href="home.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="profile.php">
          <i class="fas fa-user"></i>
          <span class="nav-item">Profile</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-wallet"></i>
          <span class="nav-item">Wallet</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Parking slot</span>
        </a></li>
        <li><a href="edit.php">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Help</span>
        </a></li>
        <li><a href="php/logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    
    <section class="main">
      <div class="main-top">
        <h1>Plan</h1>
      </div>
      <div class="main-skills">
        <div class="card">
          <i><img src="img/GNC.png" alt="" style="width:100px; "></i>
          <h3>Guagua National College</h3>
          <p>Visit GNC page.</p>
          <button><a href="https://gnc.edu.ph" target="_blank" style="color: white;">Link</a></button>
        </div>
        <div class="card">
          <i class="fab"></i>
          <h3>Standard</h3>
          <p class="PR" style="font-size: 40px;">$29</p>
          <p>Feature</p>
          <p>Feature</p>
          <p>Feature</p>
          <button><a href="" style="color: white;">Subcribe</a></button>
        </div>
        <div class="card">
          <i class=""></i>
          <h3>VIP 1</h3>
          <p class="PR" style="font-size: 50px;">$39</p>
          <p>Feature</p>
          <p>Feature</p>
          <p>Feature</p>
          <p>Feature</p>
          <p>Feature</p>
          <button>SUBCRIBE</button>
        </div>
        <div class="card">
          <i class="fab"></i>
          <h3>Premium</h3>
          <p class="PR" style="font-size: 40px;">$39</p>
          <p>Feature</p>

          <p>Feature</p>

          <p>Feature</p>

          <p>Feature</p>

          <p>Feature</p>

          <p>Feature</p>

          <p>Feature</p>

          <p>Feature</p>

          <button>Subcribe</button>
        </div>
      </div>
    </section>
  </div>
</body>
</html>