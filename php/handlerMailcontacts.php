<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$templatecontactformmessage = $_POST['template-contactform-message'];
mail('info@sergeikulikov.com',"Тема сообщения: $subject\n$text", "\nИмя: $name\nE-mail: $email\n$text\nТелефон: $phone\nТекст сообщения: $templatecontactformmessage\n$text");
echo 'success';
?>
