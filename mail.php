<?php
        require_once 'vendor/autoload.php';

        function mailSend($to, $from , $msg, $name, $subject) { 

        $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 587,'tls'))
        ->setUsername('capital.khinayemyint@gmail.com')
        ->setPassword('khinayemyint123!')
        ;

        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Our Code World Newsletter'))
        ->setFrom([ $from  => $name])
        ->setTo([ $to => "Mail Receiver"])
        ->setSubject($subject)
        ->setBody($msg, 'text/html');
        $result = $mailer->send($message);
        if($result) {
            $msg = true;
            //header('location:contact.php');
        }
        else {
            $msg = false;
            //echo "Mail Sent Unsuccessfully";
        }

    }

?>