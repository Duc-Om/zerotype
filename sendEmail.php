<?php
    require('./PHPMailer/src/Exception.php');
    require('./PHPMailer/src/OAuth.php');
    require('./PHPMailer/src/PHPMailer.php');
    require('./PHPMailer/src/POP3.php');
    require('./PHPMailer/src/SMTP.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    class SendMail{
        public function send($user,$email){
            $pass='buiminhduc2k';
            $mail = new PHPMailer(true);
            try{
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'bduc230920@gmail.com';
                $mail->Password = $pass;
                $mail->SMTPSecure='tls';
                $mail->Port = 587;
                $mail->CharSet='UTF-8';
                $mail->setFrom('bduc230920@gmail.com');
                $mail->addAddress($email, "Đăng kí thành công");
                $mail->isHTML(true);
                $mail->Subject= "Đăng kí thành công";
                $mail->Body="Chào ".$user. "! Tài khoản của bạn đã đăng kí thành công";
                $mail->send();
                echo 'Message has been send';
            }catch(Exception $e){
                echo 'Message could not be send. Mailer Error: '.$mail->ErrorInfo;
            }
        }
    }
        
    
?>