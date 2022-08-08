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
    <title>Shopping Product Parts</title>
</head>
<body>
    <hr>
    
    <?php
        include_once "all_product_nav.php";
        include_once "section.php"; 
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

        <div class="main_product_img">
            <span class="img">
                <img src="./image/girl-1.jpg" alt="girl">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/girl-2.jpg" alt="girl">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/girl-3.jpg" alt="girl">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/girl-4.jpg" alt="girl">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
        </div>

        <div class="main_product_img">
            <span class="img">
                <img src="./image/man-1.jpg" alt="man">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/man-2.jpg" alt="man">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/man-3.jpg" alt="man">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/man-4.jpg" alt="man">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
        </div>

        <div class="main_product_img">
            <span class="img">
                <img src="./image/woman-1.jpg" alt="woman">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/woman-2.jpg" alt="woman">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/woman-3.jpg" alt="woman">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/woman-4.jpg" alt="woman">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
        </div>

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

        <div class="main_product_img">
            <span class="img">
                <img src="./image/bride & groom-1.jpg" alt="bride & groom">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/bride & groom-2.jpg" alt="bride & groom">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/bride & groom-3.jpg" alt="bride & groom">
                <p>Size: 42</p>
                <p>Price: 800AF</p>
            </span>
            <span class="img">
                <img src="./image/bride & groom-4.jpg" alt="bride & groom">
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