<?php

require('control.php');
$getData = new Data();
$select = $getData -> selectContentID($_GET['content']);

?>
<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>News title - Zerotype Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="header">
        <div>
            <div class="logo">
                <a href="index.php">Zero Type</a>
            </div>
            <ul id="navigation">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="features.php">Features</a>
                </li>
                <li class="active">
                    <a href="news.php">News</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="contents">
        <div class="post">
            <?php foreach($select as $news){ ?>
            <div class="date">
                <p>
                    <span><?php echo date_format(date_create($news['date']),'m')?></span> <?php echo date_format(date_create($news['date']),'Y')?>
                </p>
            </div>
            <h1><?php echo $news['tilte'] ?> <span class="author"><?php echo $news['username']?></span></h1>
            <p> <?php echo $news['s_content']?>
            </p>
            <p> <?php echo $news['l_content']?>
            </p>
            <span><a href="news.php" class="more">Back to News</a></span>
            <?php } ?>
        </div>
    </div>
    <div id="footer">
        <div class="clearfix">
            <div id="connect">
                <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a>
                <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
                <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
                <a href="http://www.freewebsitetemplates.com/misc/contact/" target="_blank" class="tumbler"></a>
            </div>
            <p>
                © 2023 Zerotype. All Rights Reserved.
            </p>
        </div>
    </div>
</body>

</html>