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
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Navbar Parts</title>
</head>
<body>
    <div class="container">
        <div class="Navbar">
            <img class="logo" src="./image/logo.PNG" alt="logo image">
            <nav>
                <ul id="menuList">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="branches.php">Branches</a></li>
                    <li><a href="all_product.php">All Product</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <img class="menu-icon" style="width:40px; margin-top: -53px" src="./image/set1.PNG"  alt="image for show" onclick="togglemenu()">
        </div>
    </div>
    <script>
        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";
        function togglemenu() {
            if(menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "180px";
            }
            else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>