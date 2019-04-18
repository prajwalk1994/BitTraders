<!DOCTYPE html>
<html lang="en">

<?php if(!isset($_COOKIE["last_visited"])){
    setcookie("last_visited"," ", time()+60*60*24*5, "/");
} 
$url = 'http://qurizm.com/market/api.php';

if (isset($_POST['u_id'])) {
   
}
else{
        $current_url = "http://www.prajwalk.com/products.php";
        header("Location: https://qurizm.com/market/g_login1.php?f_url=$current_url");
    }
?>

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
                <li class="active">
                    <a href="products.php">Products</a>
                </li>
                <li>
                    <a href="contacts.php">Contacts</a>
                </li>
                <li>
                    <a href="news.html">News</a>
                </li>
                <li>
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
<div class="container">
    <div class="row product-page">
        <h1 style="text-align:center">Buy Cryptos</h1>
        <a href="products/bitcoin.php"><div class="col-md-3 product-intro">
            <h3>Bitcoin</h3><br/>
            <img class="img-responsive img-rounded" src="images/btc.png" alt="Bitcoin"><br/>
        </div></a>
        <a href="products/ethereum.php"><div class="col-md-3 product-intro">
            <h3>Ether</h3><br/>
            <img class="img-responsive img-rounded" src="images/eth.png" alt="Ethereum"><br/>  
        </div></a>
        <a href="products/litecoin.php"><div class="col-md-3 product-intro">
            <h3>LiteCoin</h3><br/>
            <img class="img-responsive img-rounded" src="images/ltc.png" alt="Litecoin"><br/>
        </div></a>
        <a href="products/ripple.php">
            <div class="col-md-3 product-intro">
                <h3>Ripple</h3><br />
                <img class="img-responsive img-rounded" src="images/xrp.png" alt="XRP"><br />
            </div>
        </a>
    </div>
    <div class="row product-page">
        <a href="products/bitcoincash.php">
            <div class="col-md-3 product-intro">
                <h3>Bitcoin Cash</h3><br />
                <img class="img-responsive img-rounded" src="images/bch.png" alt="Bitcoin Cash"><br />
            </div>
        </a>
        <a href="products/stellar.php">
            <div class="col-md-3 product-intro">
                <h3>Stellar</h3><br />
                <img class="img-responsive img-rounded" src="images/stellar.png" alt="Stellar"><br />
            </div>
        </a>
        <a href="products/monero.php">
            <div class="col-md-3 product-intro">
                <h3>Monero</h3><br />
                <img class="img-responsive img-rounded" src="images/monero.png" alt="Monero"><br />
            </div>
        </a>
        <a href="products/cardano.php">
            <div class="col-md-3 product-intro">
                <h3>Cardano</h3><br />
                <img class="img-responsive img-rounded" src="images/cardano.png" alt="Cardano"><br />
            </div>
        </a>
    </div>
    <div class="row product-page">
        <a href="products/tether.php">
            <div class="col-md-3 product-intro">
                <h3>Tether</h3><br />
                <img class="img-responsive img-rounded" src="images/tether.png" alt="Tether"><br />
            </div>
        </a>
        <a href="products/eos.php">
            <div class="col-md-3 product-intro">
                <h3>EOSIO</h3><br />
                <img class="img-responsive img-rounded" src="images/eos.png" alt="EOSIO"><br />
            </div>
        </a>
    </div>
</div><hr/>
<div class="row">
    <div class="col-md-6">
    <table class="table">
        <thead>
            <tr><th>Last Visited</th></tr>
        </thead>
        <tbody>
             <?php 
                $lastVisited =array_slice(array_unique(array_reverse(array_filter(explode(" ",$_COOKIE["last_visited"])))),0,5,true);
                foreach($lastVisited as $key => $value ){
                    print("<tr><td><a href=\"products/$value.php\">$value</a></td></tr>");
                }
            ?>
        </tbody>
    </table>
    </div>
    <div class="col-md-6">
    <table class="table">
        <thead>
            <tr><th>Most Visited</th></tr>
        </thead>
        <tbody>
            <?php
                $mostVisited =array_count_values(array_filter(explode(" ",$_COOKIE["last_visited"])));
                arsort($mostVisited);
                $mostVisitedArray = array_slice($mostVisited, 0,5,true);
                foreach($mostVisitedArray as $key => $value ){
                    print("<tr><td><a href=\"products/$key.php\">$key</a></td></tr>");
                }
            ?>
        </tbody>
    </table>
    </div>
</div>
</body>