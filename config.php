<?php 
    $server = "localhost";
    $user =  "root";
    $pass = "";
    $databaseName = "online_shopping";

    $con = mysqli_connect($server, $user, $pass, $databaseName);
    
    if(!$con) {
        echo "<span style='color: red;'>Not Successfully Connected!</span>";
    }
?>