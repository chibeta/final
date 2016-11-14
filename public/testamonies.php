<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Testamonies"]); ?>
<script>
$( "#testamonies" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <h2>Testamonies</h2>
    <div class="well main-content">
        <p>Here are stories of what God is doing in our midst</p>
    </div>
</div>
<?php render("footer"); ?>