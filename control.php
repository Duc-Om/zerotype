<?php
    require('connect.php');
    require('sendEmail.php');
    class Data{
        public function insert($name,$email,$subject,$note){
            global $connect;
            // $connect = new Connect();
            $sql = "insert into contact(name, email, subject, note) values('$name', '$email', '$subject', '$note')";
            $run = mysqli_query($connect, $sql);
            return $run;
        }
        // public function login($user,$pass){
        //     global $connect;
        //     $sql = "select * from register where user='$user' and pass = '$pass'";
        //     $run = mysqli_query($connect, $sql);
        //     $num = mysqli_num_rows($run);
        //     return $num;
        // }
        public function login($user,$pass){
            global $connect;
            $sql="select * from register where user = '$user' and pass = '".md5($pass)."'";
            $run = mysqli_query($connect,$sql);
            if($run->num_rows > 0){
                while($row = $run->fetch_assoc()) {
                    setcookie("user",$row['user'],time()+3600);
                    setcookie("user",$row['pass'],time()+3600);
                    break;
                }
                return true;
            }
            return false;
        }
        public function loginGetValue($user,$pass){
            global $connect;
            $sql="select * from register where user = '$user' and pass = '$pass'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function all(){
            global $connect;
            $sql = "select * from register";
            $run = mysqli_query($connect, $sql);
            return $run;
        }

        public function register($name,$gender,$email,$user,$pass,$image,$hobby){
            global $connect;
            $sql = "insert into register(name,gender,email,user,pass,image,hobby,role) values('$name','$gender','$email','$user','$pass','$image','$hobby','USER')";
            $run = mysqli_query($connect, $sql);
            $sendMail = new SendMail();
            $sendMail->send($user,$email);
            return $run;
        }
        
        public function selectContentID($id){
            global $connect;
            $sql = "select * from news where id = $id";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function selectContent(){
            global $connect;
            $sql = "select * from news";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function delete($id){
            global $connect;
            $sql = "delete from news where id = $id";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function Update_news($id,$tilte,$username,$s_content,$l_content,$date){
            global $connect;
            $sql = "update news set tilte = '$tilte',username='$username',
            s_content='$s_content',l_content='$l_content',date='$date'
            where id = $id";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function add_content($tilte,$username,$s_content,$l_content,$date){
            global $connect;
            $sql="insert into news(tilte,username,s_content,l_content,date) values('$tilte,$username,$s_content,$l_content,$date')";
            $run=mysqli_query($connect,$sql);
            return $run;
        }
    }

?>