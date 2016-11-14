<?php render("header", ["title"=>"Store"]); ?>
<script>
$( "#store" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <header>
        <p>Welcome,
            <?php 
            if (!isset($_SESSION['username'])) 
            { ?>
            Guest. Would you like to <a href="login-form.php">Log in</a>?
            <?php 
            } 
            else {
            echo($_SESSION['username']);}?>
            </p>
    </header>
    <div class="well main-content">
        <h3>Featured</h3>
            <ul class="list-inline">
                <?php foreach ($positions as $position): ?>
                <li class="col-md-2 col-xs-8 panel panel-default">
                    <div class="panel-heading"><?= $position["name"] ?>
                    <?php if ($position["eBook"]== 1) {
                        print(" eBook");
                    }
                    else {
                        print(" paperback");
                    }
                    ?>
                    </div>
                    <div class="panel-body">
                        <img src="img/salvation.jpg" class="img-responsive">
                        <p>Price $<?= $position["price"] ?></p>
                        <form action="cart.php" method="post">
                            <fieldset>
                            <div class="form-group">
                                <p>Quantity</p>
                                <input autocomplete="off" autofocus class="form-control" name="quantity" placeholder="0" type="number"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="item" value="<?= $position["item_id"] ?>" type="hidden"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="price" value="<?= $position["price"] ?>" type="hidden"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="name" value="<?= $position["name"] ?>" type="hidden"/>
                            </div>
                            <div class="form-group">
                            <button class="btn btn-warning" href="cart.php" role="button">Add to Cart</button>
                            </div>
                            </fieldset>    
                        </form>
                        
                    </div>
                </li>
                <?php endforeach ?>
            </ul>

    </div>
</div>
<?php render("footer"); ?>