<?php

class EmailService {

    public function enviaEmail($destination) {

        $to      = $destination->Email;
        $subject = 'SOLID';
        $message = 'Introducao aos principios SOLID';
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if (EmailValida::isValid($this->to))
            mail($to, $subject, $message, $headers);
        else 
            return "Email invalido!";
    }
}
?>