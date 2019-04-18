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
    <div class="container"><br/>
        <h3>Add a new user</h3><hr/><br/>
        <form action="insert.php" method="POST">
            <div class="form-group row">
            <label for="first-name" class="col-2 col-form-label">First name</label>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="John" id="first-name" name="first_name">
            </div>
            </div>
            <div class="form-group row">
            <label for="last-name" class="col-2 col-form-label">Last Name</label>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="Doe" id="last-name" name="last_name">
            </div>
            </div>
            <div class="form-group row">
            <label for="email" class="col-2 col-form-label">Email</label>
            <div class="col-5">
                <input class="form-control" type="email" placeholder="abc@xyz.com" id="email" name="email">
            </div>
            </div>
            <div class="form-group row">
            <label for="address" class="col-2 col-form-label">Address</label>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="120 Some Avenue" id="address" name="address">
            </div>
            </div>
            <div class="form-group row">
            <label for="cellphone" class="col-2 col-form-label">Cell Phone</label>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="1-(555)-555-5555" id="cellphone" name="cellphone">
            </div>
            </div>
            <div class="form-group row">
            <label for="homephone" class="col-2 col-form-label">Home Phone</label>
            <div class="col-5">
                <input class="form-control" type="text" placeholder="1-(555)-555-5555" id="homephone" name="homephone">
            </div>
            </div><br/>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>