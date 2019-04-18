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


                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class = "container">
        <div class="login-form"><br/>

            <?php
                $msg = '';
                
                if (isset($_POST['login']) && !empty($_POST['username']) 
                && !empty($_POST['password'])) {
                    
                if ($_POST['username'] == 'admin' && 
                    $_POST['password'] == 'admin') {
                    
                    header("location: users.php");
                }else {
                    $msg = 'Wrong username or password';
                }
                }
            ?>

            <h1 style="text-align: center">Login</h1><br/>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input name="username" type="text" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <button name="login" type="submit" class="btn btn-primary">Submit</button>
                <h4><?php echo $msg; ?></h4>
            </form>
        </div>
    </div>
</body>