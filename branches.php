<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Branches Parts</title>
</head>
<body class="branch">
    <?php
        include_once "navbar.php";
    ?>
    <img src="./image/branches-banner.jpg" style="width: 100%; height:350px; 
    margin-top: -300px;" alt="branches_bannder">
    <hr>
    <div class="main-item">
        <div class="item">
            <img class="branches-img" src="./image/IMG_6249.JPG" alt="kabul branches">
            <a href="#"><p>Kabul</p></a>
        </div>
        <div class="item">
            <img class="branches-img" src="./image/IMG_6252.JPG" alt="herat branches">
            <a href="#"><p>Herat</p></a>
        </div>
        <div class="item">
            <img class="branches-img" src="./image/IMG_6254.JPEG" alt="kandahar branches">
            <a href="#"><p>Kandahar</p></a>
        </div>
    </div>
    <hr>
    <?php
        include_once "footer.php";
    ?>
</body>
</html>