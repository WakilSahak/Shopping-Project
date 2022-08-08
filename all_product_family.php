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
    <title>Family Part</title>
</head>
<body>
    <hr>
    
    <?php
        include_once "all_product_nav.php";
    ?>
    
    <div class="main_product">
        <div class="main_product_img">
            <span class="img">
                <img src="./image/family-1.jpg" alt="family">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/family-2.jpg" alt="family">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/family-3.jpg" alt="family">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/family-4.jpg" alt="family">
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