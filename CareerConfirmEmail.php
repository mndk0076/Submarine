<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function confirmEmail($email){
    $mail = new PHPMailer(true);
    try {
                                
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;                               
        $mail->Username = 'underwater12543@gmail.com';      
        $mail->Password = 'zmcqkxyxrmiwruyi';                           
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;   
        // TCP port to connect to
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Recipients
        $mail->setFrom('underwater12543@gmail.com', 'Underwater Restaurant');  //Where to put the sent from?
        $mail->addAddress($email, 'Applicant');     // can I use a variable containing their email?



        //Content
        $mail->isHTML(true);         // Set email format to HTML
        $mail->Subject = 'Career Confirmation';
        $mail->Body    = 'Congratulations, You&#39;ve successfully applied to Underwater! You will hear back from us in 3-5 days.';
        $mail->AltBody = 'Congratulations, You&#39;;ve successfully applied to Underwater!  You will hear back from us in 3-5 days.';

        $mail->send();
        echo '<p class="addCar"> Message has been sent </p>';
    } catch (Exception $e) {
        echo '<p class="addCar"> Message could not be sent. </p> Mailer Error: ', $mail->ErrorInfo;
    }
}
//https://kinsta.com/knowledgebase/free-smtp-server/  website with instructions 