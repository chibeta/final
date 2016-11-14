<?php require("../includes/helpers.php");
    session_start();
    render("header", ["title"=>"Home"]); ?>
<script>
$( "#home" ).toggleClass( "active" );
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <header>
                <h2>Generation of Destiny (GoD) - What we Believe</h2>
            </header>
            <div class="well main-content">
                <p>We believe the Lord is raising up a world-wide prayer movement in the earth, which He desires that children fully participate in.  <strong>Psalm 145, Isaiah 42:10-12</strong></p>
                <p>Walking in humility - we love one another as Jesus loved us. <strong>Matthew 22:39</strong></p>
                <p>Native and non native people in each nation are very important. In fact part of our prayers are to repent because of the injustices of the past and to repent for and pray for an end to the injustices of the present.  The slave trade - abortion - first nations people - human trafficking - the plight of women and girls - are all issues we pray about. "For the Lord is a God of justice" <strong>Isaiah 30:18-19</strong></p>        
                <p><strong>Malachi 4:6</strong> is important.  Its about parents and children standing side by side; about adults and children praying together, putting each other first, inspiring one another to lives of greater holiness & loving each other.</p>
                <p>We embrace the Biblical command to "pray for the peace of Jerusalem" <strong>Psalm 122:6 , Isaiah 62:1,6-7</strong> - that children would touch the Lord's own heart for national Israel in this time of human history.  That they would agree in prayer with His heart - <strong>Zechariah 2:8 & 10</strong>  and with what He wants to do  <strong>Romans 10:1, Hosea 2:19-23.</strong></p>
                <p>We believe this is God's chosen time on the earth. A time for love (passion) for Jesus - <strong>Matthew 22:37</strong>, more than ever before.  A time for prayer more widespread than ever before -     <strong>Luke 18:7. Isaiah 56:6-7</strong>. </p>
                <p>For it is the Spirit of God who joins with the Bride (the whole body of Christ living in intimacy with Jesus - she knows she is a Bride) to say (to speak or cry in prayer) "Come Lord Jesus - And the Spirit and the Bride say Come!" <strong>Revelation 22:17</strong></p>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 panel">
            <header>
                <h2>Who we are</h2>
            </header>
            <div class="well main-content">
                <p>Lelonnie Hibberd Bio</p>
                <p>Mike Hibberd Bio</p>
            </div>
        </div>
    </div>
</div>
<?php render("footer"); ?>
