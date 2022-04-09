<?php
    require('control.php');
    $getData = new Data();
    $selectAll = $getData->selectContent();
?>
<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <title>Zerotype Website Template</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div id="header">
        <div>
            <div class="logo">
                <a href="index.php">Zero Type</a>
            </div>
            <ul id="navigation">
                <li class="active">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="features.php">Features</a>
                </li>
                <li>
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
    <!-- <div id="adbox">
        <div class="clearfix">
            <img src="images/box.png" alt="Img" height="342" width="368">
            <div>
                <h1>Ideas?</h1>
                <h2>That's what we live for.</h2>
                <p>
                    Wix is an online website builder with a simple drag & drop interface, meaning you do the work online and instantly publish to the web. <span><a href="index.php" class="btn">Try It Now!</a><b>Don’t worry it’s for free</b></span>
                </p>
            </div>
        </div>
    </div> -->
    <div id="contents">
        <div id="tagline" class="clearfix">
        <table>
                <tr>
                    <td>id</td>
                    <td>tilte</td>
                    <td>username</td>
                    <td>s_content</td>
                    <td>l_content</td>
                    <td>date</td>
                </tr>
                <?php
                    foreach($selectAll as $se){
                ?>
                <tr>
                    <td><?php echo $se['id'] ?></td>
                    <td><?php echo $se['tilte'] ?></td>
                    <td><?php echo $se['username'] ?></td>
                    <td><?php echo $se['s_content'] ?></td>
                    <td><?php echo $se['l_content'] ?></td>
                    <td><?php echo $se['date'] ?></td>
                    <td><a href="update_post.php?update=<?php echo $se['id']?>">Sửa</a></td>
                    <td><a href="delete_post.php?delete=<?php echo $se['id'] ?>" 
                    onclick="return confirm('Bạn có chắc chắn muốn xóa hay không???')">Xóa</a></td>
                    <td><a href="add_post.php">Thêm</a></td>
                </tr>
                <?php  } ?>
            </table>
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