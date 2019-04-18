<!DOCTYPE html>
<html lang="en">
    <?php if(!isset($_COOKIE["last_visited"])){
    setcookie("last_visited","",time()+60*60*24*5);
}else{
    setcookie("last_visited", $_COOKIE["last_visited"]."cardano ", time()+60*60*24*5, "/");
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
        <br/><h3>Cardano</h3><br/><hr/>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive img-rounded" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Cardano_logo.svg/512px-Cardano_logo.svg.png" alt="Cardano"><br/>
            </div>
            <div class="col-md-6">
                <h1>Product Description</h1>
                <p>Cardano is a distributed computing platform that runs the blockchain for the Ada cryptocurrency. Bittrex was the first exchange and Daedalus was the first cryptocurrency wallet that holds Ada and allowes transfers to other wallet addresses, but there are more to choose from now.[4]

Cardano blockchain was created by blockchain development firm Input Output Hong Kong (IOHK) and led by Charles Hoskinson, former co-founder of BitShares, Ethereum and Ethereum Classic, and aims to run smart contracts, decentralized applications, side chains, multi-party computation, and metadata.</p>
            <form>
                <br/>
                <input class="form-control" type="text" placeholder="Enter the number of Cardano"/><br/>
                <button class="btn btn-primary">Buy</button><br/>
            </form>
            </div>
        </div>
    </div>
