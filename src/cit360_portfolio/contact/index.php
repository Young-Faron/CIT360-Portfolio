<?php
    if ($_POST['action'] == 'Send'){ 
        // Collect the data
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $captcha = strtolower($_POST['captcha']);
            // Check the data
            if(empty($firstname) || empty($lastname) || empty($email) || empty($subject) || empty($message)) {
                $reply = 'Sorry, one or more fields are empty. All fields are required.';
                include 'contact.php';
                exit;
            } 
            // Check the captcha
            if(empty($captcha) || $captcha != 'red') {
                $reply = 'The captcha answer is incorrect.';
                include 'contact.php';
                exit;
            }
            
        // Assemble the message
        $finalmessage = "Name: $firstname $lastname \n";
        $finalmessage .= "Email: $email \n";
        $finalmessage .= "Subject: $subject \n";
        $finalmessage .= "Message: \n $message"; 
        
        // Send the message
        $to = 'contactme@workwithfaronyoung.com';
        $from = "From: $email";
        $result = mail($to, $subject, $finalmessage, $from); 
        
        // Let the client know what happened
        if ($result == TRUE) {
            $reply = "Thank you $firstname for contacting me.";
            unset($firstname);
            unset($lastname);
            unset($email);
            unset($subject);
            unset($message);
            include 'contact.php';
            exit;
        } 
        else {
            $reply = "Sorry $firstname but there was an error and the message could not be sent.";
            unset($firstname);
            unset($lastname);
            unset($email);
            unset($subject);
            unset($message);
            include 'contact.php';
            exit;
        } 
} 
    else {
    include 'contact.php';
} 


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
