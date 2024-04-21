<?php 
    $servername = "localhost";
    $username = "root";
    $password = "dh121234";
    $db_name = "loginpg";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3307);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>