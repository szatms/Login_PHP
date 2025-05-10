<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $db_name = "adatok";
    $portNum = 3306;

    $con = new mysqli($servername, $username, $password, $db_name, $portNum);

    if($con->connect_error) {
        die("Connection failed".$con->connect_error);
    }
    //echo "Connection successful";
?>
