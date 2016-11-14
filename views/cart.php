<?php render("header", ["title"=>"Cart"]); ?>
<script>
$( "#store" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <div>
        <p><a href="store.php">Keep Shopping</a></p>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <header>
                <h2>Shopping Cart</h2>
                <h3 class="right"><a href="empty.php">Empty Cart</a></h3>
            </header>

            <div class="well main-content" id="table">
                <table>
                    <tr>
                        <th></th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
               <?php foreach ($positions as $position): ?>
                    <tr>
                        <td><form action="delete.php" method="post">
                              <input type="checkbox" name="item" value="<?= $position["item_id"] ?>">
                              <input class="btn btn-primary" type="submit" value="Delete">
                            </form>
                        </td>
                        <td><?= $position["name"] ?></td>
                        <td><form action="update.php" method="post">
                              <input name="item_id" value="<?= $position["item_id"] ?>" type="hidden">
                              <input class="form-update" name="quantity" placeholder="<?= $position["quantity"] ?>" type="number">
                              <input class="btn btn-primary" type="submit" value="Update">
                            </form>
                        </td>
                        <td><?= $position["price"] ?></td>
                        <td><?= number_format($position["price"] * $position["quantity"], 2, '.', ','); 
                        $price= $price + number_format($position["price"] * $position["quantity"], 2, '.', ',');?></td>
                    </tr>
            <?php endforeach ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td><?= $price ?></td>
                     </tr>       
                </table>
            </div>
            <?php require_once('../config.php'); ?>
            <form class="right" action="charge.php" method="POST">
                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="<?=$stripe['publishable_key']; ?>"
                    data-amount="<?= $price*100 ?>"
                    data-name="Stripe.com"
                    data-description="2 widgets"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-zip-code="true">
                </script>
            </form>
        </div>
    </div>
</div>
<?php render("footer"); ?>