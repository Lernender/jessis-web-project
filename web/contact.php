<?php
$first_name = $_POST ['first_name'];
$name = $_POST ['name'];
$mail = $_POST ['email'];

$email_from = 'redaktion@woche-pass.ch';
$email_subject = 'test';
$email_body = "Vorname: $first_name Nachname: $name E-Mail-Adresse: $mail";

echo $email_body;

$header = 'From: ' . $email_from . "\r\n" .
    'Reply-To: ' . $email_from  . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$to = 'j.fellmann@woche-pass.ch';
if(mail($to, $email_subject, $email_body, $header)) {
    echo 'gesendet';
} else {
    echo 'Fehler beim senden';
}
?>

