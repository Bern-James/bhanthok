<?php

$to="emmasecondary@gmail.com";
$from="From: ".mysql_real_escape_string($_POST['email']);
$names=mysql_real_escape_string($_POST['names']);
$subject=mysql_real_escape_string($_POST['subject']);
$message=$names." says:\n".mysql_real_escape_string($_POST['message']);

mail($to, $subject, $message, $from);

echo "<script>window.alert('Mail sent successfully.')</script>";

echo "Mail Sent successfully.";

header('refresh:1; url=contact.html');

?>