<!DOCTYPE html>
<html lang="en">

<?php if(!isset($_COOKIE["last_visited"])){
    setcookie("last_visited","",time()+60*60*24*5);
}else{
    setcookie("last_visited", $_COOKIE["last_visited"]."tether ", time()+60*60*24*5, "/");
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
        <br/><h3>Tether</h3><br/><hr/>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rounded" src="../images/tether.png" alt="Bitcoin"><br/>
            </div>
            <div class="col-md-6">
                <h1>Product Description</h1>
                <p> Tether is cryptocurrency with tokens issued by Tether Limited, which claims that each token issued is backed by one United States dollar though they may not necessarily be redeemed through the Tether platform. Tether is called a stablecoin because it is designed to always be worth $1.00. According to Coinmarketcap it is the second most traded cryptocurrency after Bitcoin.

Tether Limited states that Tether is not a financial instrument. They further state that owners of Tethers have no contractual rights, other legal claims, or guarantees against losses.

Tether Limited and the Tether cryptocurrency are controversial because of the company's failure to provide a promised audit showing adequate reserves backing Tether, its alleged role in manipulating the price of bitcoin, the unclear relationship with the Bitfinex exchange, and the company's apparent lack of a long-term banking relationship. Author David Gerard was quoted by the Wall Street Journal saying that Tether "is sort of the central bank of crypto trading ... [yet] they don't conduct themselves like you'd expect a responsible, sensible financial institution to do." Tether's price decreased to lows of $0.90 on 15 October 2018 on speculation that investors are losing faith in the token. </p>
            <form>
                <br/>
                <input class="form-control" type="text" placeholder="Enter the number of Tether"/><br/>
                <button class="btn btn-primary">Buy</button><br/>
            </form>
            </div>
        </div>
    </div>
