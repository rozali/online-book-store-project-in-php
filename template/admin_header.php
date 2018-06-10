<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="./bootstrap/css/cust-element.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="padding: 0px;">
           <img src="./bootstrap/img/ico.png">
          </a>
        </div>
        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

          <ul class="nav navbar-nav navbar-right">
              <li><a href="books.php"><i class="fas fa-book"></i>&nbsp; Buku</a></li>
              <li><a href="publisher_list.php"><i class="fas fa-paperclip"></i>&nbsp; Penerbit</a></li>
              <li><a href="publication.php"><i class="fas fa-barcode"></i>&nbsp; Publikasi</a></li>
              <li><a href="cart.php"><i class="fas fa-shopping-cart"></i>&nbsp; Keranjang</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Global Science</h1>
        <!-- <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
        <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p> -->
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">