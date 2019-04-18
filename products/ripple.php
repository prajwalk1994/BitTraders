<!DOCTYPE html>
<html lang="en">

<?php if(!isset($_COOKIE["last_visited"])){
    setcookie("last_visited","",time()+60*60*24*5);
}else{
    setcookie("last_visited", $_COOKIE["last_visited"]."ripple ", time()+60*60*24*5, "/");
}
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitTraders</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="../css/styles.css" rel="stylesheet">

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
                        <a href="../index.html">Home</a>
                    </li>
                    <li>
                        <a href="../about.html">About</a>
                    </li>
                    <li  class="active">
                        <a href="../products.php">Products</a>
                    </li>
                    <li>
                        <a href="../contacts.php">Contacts</a>
                    </li>
                    <li>
                        <a href="../news.php">News</a>
                    </li>
                    <li>
                        <a href="../login.php">Login</a>
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

    <div class="container product-info-page">
        <br/><h3>Ripple</h3><br/><hr/>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rounded" src="../images/xrp.png" alt="XRP"><br/>
            </div>
            <div class="col-md-6">
                <h1>Product Description</h1>
                <p>Ripple is a real-time gross settlement system, currency exchange and remittance network created by Ripple Labs Inc., a US-based technology company. Ripple is built upon a distributed open source internet protocol, and supports tokens representing fiat currency, cryptocurrency, commodities, or other units of value such as frequent flier miles or mobile minutes. Released in 2012, Ripple purports to enable "secure, instantly and nearly free global financial transactions of any size with no chargebacks."

Ripple is based around a shared public ledger, the XRP Ledger, which uses a consensus process that allows for payments, exchanges and remittance in a distributed process. The network can operate without the Ripple company; among its validators are companies, internet service providers, and the Massachusetts Institute of Technology. The ledger employs the decentralized native cryptocurrency known as XRP, which as of September 2018 was the third largest coin by market capitalization. </p>
            <form>
                <br/>
                <input class="form-control" type="text" placeholder="Enter the number of Ripple"/><br/>
                <button class="btn btn-primary">Buy</button><br/>
            </form>
            </div>
        </div>
    </div>
