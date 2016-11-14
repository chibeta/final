<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Videos"]); ?>
<script>
$( "#videos" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <header>
        <h2>Videos</h2>
    </header>
    <div class="well main-content">
        <p>This is my Vlog page</p>
        <p>Complete with YouTube link and subscribe button!</p>
    </div>
</div>
<?php render("footer"); ?>