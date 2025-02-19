<!-- ไฟล์นี้ใช้เชื่อมต่อกับ Database -->

<?php
    $servername = "localhost"; //"10.1.3.40"; //localhost
    $username = "root"; 
    $password = "";
    $dbname = "signup";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn){
        die("Connection failed" . mysqli_connect_errno());
    }
    // else{
    //     echo "Connected successfully";
    // }
   



?>