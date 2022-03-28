<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'ajoykumardas08@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User Message: $message.\n";
    
    $to = "dasajoykumar129@gmail.com";

    $headers = "Form: $email_from \r\n";
    // $headers .= "Reply-to: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>