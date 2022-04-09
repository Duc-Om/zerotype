<?php
session_start();
include('control.php');
$getData = new Data();
?>

    <!DOCTYPE HTML>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Contact - Zerotype Website Template</title>
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
                    <li>
                        <a href="news.php">News</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li class="active">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="contents">
            <div class="section">
                <form action="" method="POST" class="message">
                    <table>
                        <tr>
                            <td><input type="text" name="username" id="txt_username" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="password" id="txt_password" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Send" onclick="checkEmpty()"></td>
                        </tr>
                        <tr>
                            <td><a href="register.php">Đăng kí</a></td>
                            <td><a href="#">Quên mật khẩu</a></td>
                        </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $user = $getData->all();
                    $run = $getData->login($_POST['username'],md5($_POST['password']));
                    // foreach($user as $us){
                    //     if($_POST['username'] != $us['user']){
                    //         echo"<script> alert('Tài khoản không đúng')</script>";
                    //     }else if($_POST['username'] == $us['user']){
                    //         if($login == 'ADMIN'){
                    //             $_SESSION['username'] = $_POST['username'];
                    //             $_SESSION['password'] = md5($_POST['password']);
                    //             header('location:adminIndex.php');
                    //         }else{
                    //             header('location:index.php');
                    //         }
                    //     }
                    // }
                    if($run){
                        $role= $getData->loginGetValue($_POST['txtUsername'],md5($_POST['txtPassword']));
                        while($row = $role->fetch_assoc()) {
							if($row['role']=="USER")
								header('Location: index.php');
							else	
								header('Location: admin.php');
							break;
						}
                    }else{
                        echo '<script>alert("Tài khoản mật khẩu không chính xác")</script>';
                    }
                } 
            ?>
            </div>
            <!-- <div class="section contact">

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
        <script src="js/js.js"></script>
    </body>

    </html>