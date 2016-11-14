<?php require("../includes/helpers.php"); ?>

<?php render("header", ["title"=>"Resources"]); ?>

<script>
$( "#resources" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <h2>Resources</h2>
    <div class="well list">
    <ul>
        <li><a href="articles.php">Articles</a></li>
        <li><a href="guides.php">Guides</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="videos.php">Videos</a></li>
    </ul>
    </div>
    <div class="main-content">
        
    </div>
</div>
<?php render("footer"); ?>