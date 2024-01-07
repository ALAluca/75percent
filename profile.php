<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>

<?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', age='$age', Password='$password' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='home.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                    $res_Password = $result['Password'];
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

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>

<body>
<div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
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

    <section>
    <!-- Main -->
  <div class="m">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td><?php echo $res_Uname; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $res_Email; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?php echo $res_Age; ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td type="password" value="1234567890"><?php echo $res_Password; ?></td>
                        </tr>
                        <tr>
                            <td>Account</td>
                            <td>:</td>
                            <td>Web Developer</td>
                        </tr>
                        <tr>
                            <td>Plate Number</td>
                            <td>:</td>
                            <td>PHP, HTML, CSS, Java</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h2>SOCIAL MEDIA</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div class="social-media">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- End -->
  </section>
  </div>
</body>
</html>