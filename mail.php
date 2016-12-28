<?php

$email = "webmaster@example.com";
$to = "dasflancer@gmail.com";
$sitename = "Спортивное питание от прозводителя оптом";
$pagetitle = "Новая заявка с сайта \"$sitename\"";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);


$message = "
Имя: $name <br>
Email: $email <br>
Телефон: $phone <br>

";

$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion() . "\r\n" .
	"Content-type: text/html; charset=\"utf-8\"";

mail($to, $pagetitle, $message, $headers);


