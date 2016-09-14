<?php


$email = pandeyrishabh25@gmail.com;
$content = nl2br($_POST['contactMessage']);
$name = $_POST['contactName'];
$sender = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];

$headers = "From: $name "."<".$sender.">\r\n";
//add boundary string and mime type specification
//$headers .= 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//send the email
mail($email, $subject, $content, $headers );

?>