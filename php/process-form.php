<?php

// Check if the POST is set and not empty
if(isset($_POST) && !empty($_POST)){
    // Get the correct information to send the mail
    $to = 'jjverkooijen@gmail.com';
    $subject = 'Email van ' . $_POST['user_name'];
    $message = $_POST['user_message'];
    $headers = 'From: ' . $_POST['user_mail'];
    // Send the mail
    // if(mail($to, $subject, $message, $headers)){ Dit is de juiste als het wel werkt
    if(true){ // Mamp does not send mail so we fake it
        header('Location: success.html');die();
    } else {
        echo 'Er is iets mis gegaan.<br><a href="' . $_SERVER['HTTP_REFERER'] . '">Ga naar het formulier</a>';
    }
} else {
    echo 'Er is iets mis gegaan.<br><a href="' . $_SERVER['HTTP_REFERER'] . '">Ga naar het formulier</a>';
}
?>