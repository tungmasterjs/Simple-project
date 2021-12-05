
<?php
    //goi thu vien

    include('../model/mail/smtp.php');
    include "../model/mail/phpmailer.php"; 
    
   // include('class.smtp.php');
   //  include "class.phpmailer.php"; 
    include "../model/mail.php"; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    $title = 'Reset Password for your account';
    $content = 'Mật khẩu của bạn đã được reset .';
    $nTo = 'tuntun';
    $mTo = 'tungtv104@gmail.com';
    $diachicc = 'xcc@gmail.com';
    //test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
    if($mail==1)
    echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
    else echo 'Co loi!';
?>