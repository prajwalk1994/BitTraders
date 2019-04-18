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

            $query = "SELECT * FROM Users";
            $users = $conn->query($query);

            while($user = $users->fetch_assoc()){
                echo "<tr><td>".$user["FIRST_NAME"]."</td><td>".$user["LAST_NAME"]."</td><td>".$user["EMAIL"]."</td><td>".$user["ADDRESS"]."</td><td>".$user["CELL_PHONE"]."</td><td>".$user["HOME_PHONE"]."</td></tr>";
            }

            $conn->close();
?>