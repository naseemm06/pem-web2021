<?php
    $name = $_POST['name'];
    $visitor_email = $_post['email'];
    $message = $_post['message'];
    
    
    $email_from = 'naseem0shalahuddin@gmail.com';

    $email_project = "mew form submission";

    $email_body = "User Name: $name.\n". 
                    "User Email: $visitor_email.\n".
                    "user message: $message.\n";
    
    $to = "naseem0shalahuddin@gmail.com";

    $shaders ="from: $email_from \r\n";
    $shaders .= "Reaply_To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$shaders);
    header("location: form.html");




?>