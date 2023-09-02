<?php
$to = 'therealremox@gmail.com';
$subject = 'test';
$message = 'testLOL';
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>