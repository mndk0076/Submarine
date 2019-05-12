<?php
if(isset ($_POST['reserve'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $party = $_POST['party-size'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    
    $to = $email;
    $subject = 'Underwater Reservation';
    $body = '<html>
                <body>
                    <h2>See you soon!</h2>
                    <p>'.$name.', your booking request has been confirmed. We look forward seeing you soon!</p>
                    
                    <h3 style="margin:0; padding:0;">Your Booking:</h3>
                    '.$name.'<br/>
                    '.$phone.'<br/>
                    '.$date.'<br/>
                    '.$time.'<br/>
                    '.$party.' people<br/>
                </body>
             </html>';
    $header = "From: ".$name. "<" .$email. ">" . "\r\n";
    $header .= "Reply-To: contact.underwater.tk \r\n";
    $header .= "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $send = mail($to, $subject, $body, $header);   
}
