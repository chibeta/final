<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Blog"]); ?>
<script>
$( "#blogs" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <h2>Blog page</h2>
    <div class="well main-content">
        <p>This is my blog about bloggy things</p>
    </div>
</div>
<?php render("footer"); ?>