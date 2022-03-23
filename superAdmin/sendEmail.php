<?php
    use PHPMailer\PHPMailer\PHPMailer;

        

    
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "bonConnectApp@gmail.com";
        $mail->Password = 'ElearningApp1*';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress('bonConnectApp@gmail.com');
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
         
            echo '<script type="text/javascript">alert("Email sent."); window.location = "otp.php";</script>';
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    
?>
