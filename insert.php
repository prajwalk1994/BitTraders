<?php

$serverName = "cmpe272db.cqumuz1tfjsq.us-east-1.rds.amazonaws.com";
            $port = 3306;
            $username = "admin";
            $password = "cmpe272db";
            $dbName = "cmpe272db";

            $conn = new mysqli($serverName, $username, $password, $dbName, $port);
            if(!$conn){
                die("Connection failed");
            }

            $first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
            $last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
            $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
            $address = mysqli_real_escape_string($conn, $_REQUEST['address']);
            $cellphone = mysqli_real_escape_string($conn, $_REQUEST['cellphone']);
            $homephone = mysqli_real_escape_string($conn, $_REQUEST['homephone']);
 
            // Attempt insert query execution
            $sql = "INSERT INTO Users (FIRST_NAME, LAST_NAME, EMAIL, ADDRESS, HOME_PHONE, CELL_PHONE) VALUES ('$first_name', '$last_name', '$email', '$address','$homephone','$cellphone')";
            if(mysqli_query($conn, $sql)){
                header("location: users.php");
            } else{
                echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
            }
?>