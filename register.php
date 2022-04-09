<?php
    require('control.php');
    require('upLoadFile.php');
    $getData = new Data();
    $upFile = new UpLoadFile();
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
                <form action="" method="post" class="message" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>(*) Họ và tên</td>
                            <td><input type="text" name="txtName"></span></td>
                        </tr>
                        <tr>
                            <td>(*) Giới tính</td>
                            <td><input type="radio" name="gender" value="Nam">Nam
                                <input type="radio" name="gender" value="Nữ">Nữ</td>

                        </tr>
                        <tr>
                            <td>(*) Email</td>
                            <td><input type="email" name="txtEmail"></td>
                        </tr>
                        <tr>
                            <td>(*) Tài khoản</td>
                            <td><input type="text" name="txtUser"></td>
                        </tr>
                        <tr>
                            <td>(*) Mật khẩu</td>
                            <td><input type="password" name="txtPass"></td>
                        </tr>
                        <tr>
                            <td>(*) Nhập lại mật khẩu</td>
                            <td><input type="password" name="txtPassAgain"></td>
                        </tr>
                        <tr>
                            <td>(*) Ảnh đại diện</td>
                            <td><input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <td>Sở thích</td>
                            <td><textarea name="txtHobby" id="" cols="30" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="btnSubmit"value="Submit"></td>
                        </tr>
                    </table>
                </form>
                <?php
                    function checkValue(){
                        $check = true;
                        if (empty($_POST['txtName'])){
                            $check=false;
                            echo '<script>alert("Tên không được để trống")</script>';
                        }else if(empty($_POST['gender'])){
                            $check=false;
                            echo '<script>alert("Bạn phải lựa chọn giới tính")</script>';
                        }
                        else if (!filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)) {
                            $check = false;
                            echo '<script>alert("Email không đúng định dạng")</script>';
                        }
                        else if (empty($_POST['txtUser']) || (strlen($_POST['txtUser']) < 5)){
                            $check=false;
                            echo '<script>alert("Tên người dùng không được để trống và độ dài phải lớn hơn hoặc bằng 5")</script>';
                        }
                        else if (empty($_POST['txtPass']) || (strlen($_POST['txtPass']) < 8)){
                            $check=false;
                            echo '<script>alert("Mật khẩu không được để trống và độ dài phải lớn hơn hoặc bằng 8")</script>';
                        }
                        return $check;
                    }
                    if(isset($_POST['btnSubmit'])){
                        if(checkValue()){
                            if($avatar == NULL){
                                $avatar = $upFile->upload();
                                $query = $getData ->register($_POST['txtName'],$_POST['gender'],$_POST['txtEmail'],
                                $_POST['txtUser'],md5($_POST['txtPass']),$avatar,$_POST['txtHobby']);
                                if($query != null){
                                    echo '<script>alert("Đăng kí thành công")</script>';
                                }
                            }else{
                                echo '<script>alert("Upload ảnh không thành công")</script>';
                            }
                        }
                    }
                    
                ?>
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
        <script src="js/js.js"></script>
    </body>

    </html>