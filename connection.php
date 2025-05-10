<?php
    $servername = "127.0.0.1"; //"fdb1027.runhosting.com";
    $username = "root"; //"4618425_adatok";
    $password = ""; //"SG{mdkfh2T,-+dMK";
    $db_name = "adatok"; //"4618425_adatok";
    $portNum = 3306;

    $con = new mysqli($servername, $username, $password, $db_name, $portNum);

    if($con->connect_error) {
        die("Connection failed".$con->connect_error);
    }
    //echo "Connection successful";
?>