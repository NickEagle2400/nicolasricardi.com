<?php

    $fullname = isset($_POST['FullName']) ? $_POST['FullName'] : '';
    $email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
    $message = isset($_POST['Message']) ? $_POST['Message'] : '';

    $EmailTo = "info@nicolasricardi.com";
    $Subject = "Nuovo messaggio da nicolasricardi.com";

    // prepare email body text
    $Body = "";
    $Body .= "Name: ";
    $Body .= $fullname;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Phone: ";
    $Body .= $phone;
    $Body .= "\n";
    $Body .= "City: ";
    $Body .= $city;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";

    // send email
    $success = mail($EmailTo, $Subject, $Body, "From:".$email);

    header("location: https://www.nicolasricardi.com/thank-you?fullName=" . $fullname);

?>