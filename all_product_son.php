<?php
session_start();
if(!isset($_SESSION['firstname'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all_product_nav.css">
    <title>Son Part</title>
</head>
<body>
    <hr>
    
    <?php
        include_once "all_product_nav.php";
    ?>
    
    <div class="main_product">
        <div class="main_product_img">
            <span class="img">
                <img src="./image/son-1.jpg" alt="son">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/son-2.jpg" alt="son">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/son-3.jpg" alt="son">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/son-4.jpg" alt="son">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
        </div>
    </div>
    <?php
        include_once "footer.php";
    ?>
</body>
</html>