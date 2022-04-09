<?php
    require('control.php');
    $getData = new Data();
    $selectID = $getData->selectContentID($_GET['update']);
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Thêm mới bài viết</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <li>
                    <a href="news.php">News</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li class="active">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="contents">
        <div class="section">
            <!-- <h1>Contact</h1>
            <p>
                You can replace all this text with your own text. Want an easier solution for a Free Website? Head straight to Wix and immediately start customizing your website! Wix is an online website builder with a simple drag & drop interface, meaning you do the
                work online and instantly publish to the web. All Wix templates are fully customizable and free to use. Just pick one you like, click Edit, and enter the online editor.
            </p> -->
            <?php foreach($selectID as $se){ ?>
            <h1>Update news</h1>
            <form method="post" class="message">
                <input type="text" name="tilte" value="<?php echo $se['tilte'] ?>">
                <input type="text" name="username" value="<?php echo $se['username'] ?>">
                <textarea name="s_content" cols="30" rows="10" value="" ><?php echo $se['s_content'] ?></textarea>
                <textarea name="l_content" cols="30" rows="10" value=""><?php echo $se['l_content'] ?></textarea>
                <input type="date" name="date" value="<?php echo $se['date'] ?>">
                <input type="submit" name='submit' value="send">
            </form>
            <?php } ?>
            <?php 
                function checkValue(){
                    $check = true;
                    if(empty($_POST['tilte'])){
                        $check = false;
                        echo "<script>alert('Tilte không được để trống!!!')</script>";
                    }else if(empty($_POST['username'])){
                        $check = false;
                        echo "<script>alert('Username không được để trống!!!')</script>";
                    }else if(empty($_POST['s_content'])){
                        $check = false;
                        echo "<script>alert('S_content không được để trống!!!')</script>";
                    }else if(empty($_POST['l_content'])){
                        $check = false;
                        echo "<script>alert('L_content không được để trống!!!')</script>";
                    }else if(empty($_POST['date'])){
                        $check = false;
                        echo "<script>alert('Chưa chọn ngày tháng!!!')</script>";
                    }
                    return $check;
                }
                if(isset($_POST['submit'])){
                    if(checkValue()){
                        $update = $getData->Update_news($_GET['update'],$_POST['tilte'],$_POST['username'],str_replace("'","'",$_POST['s_content']),str_replace("'","'",$_POST['l_content']),$_POST['date']);
                        if($update != null){
                            echo "<script>alert('Update Successfull!!'); window.location = ('adminIndex.php')</script>";
                        }
                    }
                } 
            ?>
        </div>
        <!-- <div class="section contact">
            <p>
                For Inquiries Please Call: <span>877-433-8137</span>
            </p>
            <p>
                Or you can visit us at: <span>ZeroType<br> 250 Business ParK Angel Green, Sunville 109935</span>
            </p>
        </div> -->
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>