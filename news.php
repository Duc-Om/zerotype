<?php
require('control.php');
$getData = new Data();
$select = $getData ->selectContent();
?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>News - Zerotype Website Template</title>
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
                    <a href="Login">Login</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="contents">
        <div class="main">
            <h1>News</h1>
            <ul class="news">
                <?php
                    foreach($select as $news){
                ?>
                <li>
                    <div class="date">
                        <p>
                            <?php ?>
                            <span><?php echo date_format(date_create($news['date']),'m')?></span> <?php echo date_format(date_create($news['date']),'Y')?>
                        </p>
                    </div>
                    <h2><?php echo $news['tilte'] ?> <span><?php echo $news['username']?></span></h2>
                    <p>
                       <?php echo $news['s_content']?><span><a href="post.php?content=<?php echo $news['id']?>" class="more">Read More</a></span>
                    </p>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="sidebar">
            <h1>Popular Posts</h1>
            <ul class="posts">
                <li>
                    <h4 class="title"><a href="post.php">Making It Work</a></h4>
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
                    </p>
                </li>
                <li>
                    <h4 class="title"><a href="post.php">Designs and Concepts</a></h4>
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
                    </p>
                </li>
                <li>
                    <h4 class="title"><a href="post.php">Getting It Done!</a></h4>
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
                    </p>
                </li>
            </ul>
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