<?php
$conn =new mysqli('localhost','jonatan','0000','logging_users');
    if($conn -> connect_errno){
        echo "Failed to connect to MySQL: ";
        exit();
    }else{
        echo "connected with data base";
    }
?>