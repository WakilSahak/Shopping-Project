<?php
    include "config.php";

    session_start();

    error_reporting(0);

    if(isset($_SESSION['firstname'])) {
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/AFG1.jpg">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Form Parts</title>
</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12 main">
   <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="login-email" >
            <form action="" method="POST">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>  
                <div class="form-group">
                    <input type="email" placeholder="Enter Your Email" class="form-control email"  name="email" value="<?php echo $email; ?>" required>
                </div>  
                <div class="form-group">
                    <input type="password" placeholder="Enter Your Password" class="form-control email"  name="password" value="<?php echo $_POST['password']; ?>"  required>
                </div>  
                <div class="form-group">
                    <button name="submit" class="btn">Login</button>
                </div>
                <p class="login-register-text">Don't have a account <a href="register.php">Register Here!!!</a></p>
            </form>
            <?php
                
                if(isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    $sql = "SELECT * FROM shopping WHERE email='$email' AND password='$password'";
                    $result = mysqli_query($con, $sql);
                    if($result->num_rows > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION["firstname"] = $row["firstname"];
                        header("location: home.php");
                    }
                    else {
                        echo "<span style='color:red;'>Noops! Email or Password is incorrect Or You Should Register First!</span>";
                    }
                }
            ?>
        </div>
   </div>
   <div class="col-lg-9 col-md-9 col-sm-12"></div>
</div>
<div class="modal-bg">
    <div class="modal">
        <h2>Confirm your purchase!</h2>
        <button>Add To The Cart!</button>
        <button>Cancel</button>
    </div>
</div>

</body>
</html>