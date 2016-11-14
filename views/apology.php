<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Error"]); ?>
<h1>Sorry!</h1>
<p><?= htmlspecialchars($message) ?></p>
<?php render("footer"); ?>