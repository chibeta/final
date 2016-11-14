<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Links"]); ?>
<script>
$( "#links" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <h2>Links</h2>
    <div class="well main-content">
        <p>Probably <a href="http://www.thedanielacademy.com">The Daniel Academy</a> and <a href="http://www.ihopkc.org">IHOPKC</a></p>
    </div>
</div>
<?php render("footer"); ?>