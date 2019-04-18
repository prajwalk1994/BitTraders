<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitTraders</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <span class="glyphicon glyphicon-bitcoin"></span>
                    BitTraders
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="contacts.php">Contacts</a>
                    </li>
                    <li>
                        <a href="news.html">News</a>
                    </li>
                    <li class = "active">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 style="text-align:center">Website Users</h1>
        </div>
        <div class="col-md-2"><br/>
            <a href="createUser.php"><button class="btn btn-primary">Create New User</button></a>
        </div>
    </div>
        
        <div class="users">
            <div class="form-inline">
            <input class="form-control" type="text" id="searchFirstName" onkeyup="myFunction(0,'searchFirstName')" placeholder="Search by First Name"/>
            <input class="form-control" type="text" id="searchEmail" onkeyup="myFunction(2, 'searchEmail')" placeholder="Search by Email"/>
            <input class="form-control" type="text" id="searchCellPhone" onkeyup="myFunction(4, 'searchCellPhone')" placeholder="Search by Cell Phone"/>
            <input class="form-control" type="text" id="searchHomePhone" onkeyup="myFunction(5, 'searchHomePhone')" placeholder="Search by Home Phone"/>
            
            </div>
            <table class="table table-hover" id="userTable">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Cell Phone</th>
                    <th>Home Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // $handle = fopen("text/websiteUsers.txt", "r");
                //     if ($handle) {
                // while (($line = fgets($handle)) !== false) {
                //     echo $line . '<br/>';
                // }

                // fclose($handle);
                // } else {
                //     echo "Error opening the file";
                // }
                
                include 'dbConnection.php';
            
            ?>
            </tbody>
            <hr/>
        <!-- <h1>Users for "Happiness Studios" website</h1><br/>
        <?php
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://ramyaiyer.com/dbconnection.php");
            curl_exec($ch);
        ?><hr/>
        <h1>Users for "Triple One Technologies" Website</h1><br/>
        <?php
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://labassignments.xyz/dbConnection.php");
            curl_exec($ch);
        ?> -->
        </div>
    </div>

    <script>
        function myFunction(x, id) {
        var input, filter, table, tr, td, i;
        input = document.getElementById(id);
        filter = input.value.toUpperCase();
        table = document.getElementById("userTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[x];
            if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
    </script>

</body>