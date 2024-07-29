<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db1";  
    $conn = new mysqli("localhost","root",'',"db1");
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>