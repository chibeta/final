<! DOCTYPE html>
<html lang="en">
    <head>
        <!-- include jQuery, bootstrap and stylesheet -->
        <script src="https://code.jquery.com/jquery-2.2.3.js"></script> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css"/>
        <title><?= htmlspecialchars($title)?></title>
    </head>
    <body>
        <header class="jumbotron container-fluid" style="background-image: url(http://myblog.ottawaarts.com/wp-content/uploads/2010/05/DRA-042010-LeatheryTexture-MBFT.jpg); background-size: cover;">
                    <div class="row container-fluid">
            <div class="col-md-11"></div>
            <div class="col-md-1" id="cart">
                <p><a class="btn btn-default btn-sm" href="cart.php" role="button"><span class="glyphicon glyphicon-shopping-cart"></span></a></p>
             </div>
        </div><div class="row  container-fluid">
                <div class="col-md-2" id="logo"></div>
            <div class="col-md-8 header">
                <h1>Generation of Destiny</h1>
                <h3>Raising up a Forerunner Generation</h3>
            </div>
            <div class="col-md-2 panel"id="login">
                    <?php 
                    if (!isset($_SESSION['username'])) {
                    ?>
                    <p><a class="btn btn-warning" href="login-form.php" role="button">Log In</a></p>
                    <p><a class="btn btn-warning" href="register-form.php" role="button">Register</a></p>
                    <?php
                    }
                    else {
                    ?>
                    <p>Welcome, <?=$_SESSION['username'];?></p> 
                    <a class="btn btn-warning" href="logout.php" role="button">Log Out</a>
                    <?php
                    }
                    ?>
                </div>
        </header>
        <div class="main-content">
            <div class"row container-fluid">
                <ul class="nav nav-tabs"> <!-- Nav tabs should open down when moused over and current page should be active -->
                  <li role="presentation" id="home"><a href="index.php">Home</a></li>
                  <li role="presentation" id="blogs"><a href="blogs.php">Blogs</a></li>
                  <li role="presentation" id="testamonies"><a href="testamonies.php">Testamonies</a></li>
                  <li role="presentation" id="links"><a href="links.php">Links</a></li>
                  
                  <li role="presentation" id="resources" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="resources.php" role="button" aria-haspopup="true" aria-expanded="false">
                    Resources 
                    <?php if(!isset($_SESSION['username'])) {
                ?>
                    <span class="glyphicon glyphicon-lock"></span>
                    <?php }?>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a href="articles.php">Articles</a></li>
                      <li role="presentation"><a href="guides.php">Guides</a></li>
                      <li role="presentation"><a href="music.php">Music</a></li>
                      <li role="presentation" id="videos"><a href="videos.php">Videos</a></li>
                    </ul>
                  </li>
                    <li role="presentation" id="store"><a href="store.php">Store</a></li>
                </ul>
