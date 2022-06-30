<?php 


    require_once('phpmailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->CharSet = 'utf-8';

    $name = $_POST['name'];
    $phone = $_POST['telefon'];
    $email = $_POST['email'];
    $messeg=$_POST['OtpravitZapros'];
    $checkbox = $_POST['checkbox_input'];

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testimsait@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
    $mail->Password = 'Rtyuehe2002'; // Ваш пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('testimsait@mail.ru'); // от кого будет уходить письмо?
    $mail->addAddress('kadresh66@bk.ru');     // Кому будет уходить письмо 
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Заявка клиента!!!';
    $mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email. '<br>Запрос: '.$messeg;
    $mail->AltBody = '';

    if(!$mail->send()) {
        echo 'Ошибка, не удалось отправить!';
    } else {
        echo 'Отправлено!';
    }
?>