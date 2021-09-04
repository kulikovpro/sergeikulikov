<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$minimal = $_POST['minimal'];
mail('info@sergeikulikov.com',"Дата свадьбы: $subject\n$text", "\nИмя: $name\nE-mail: $email\n$text\nТелефон: $phone\nВыбран пакет услуг: $minimal\n$value");
echo 'success';
?>
