<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $number = $_POST['number'];
    $branch = $_POST['branch'];
    $message = $_POST['message'];


    $email_from = 'ayushkumarpathaksvm@gmail.com';

    $email_subject = "New form submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Number: $number.\n".
                    "User Branch: $branch.\n".
                    "User Message: $message.\n".
   $to = "ayushkumarpathaksvm@gmail.com";

   $headers = "From: $email_from\r\n";

   $headers = "Reply-To: $visitor_email\r\n";

   mail($to,$email_subject,$email_body,$headers);

   header("Location: contact.html");



 ?>