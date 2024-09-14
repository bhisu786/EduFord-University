<?php 
$name=$_Post['name'];
$visitor_email=$_Post['email'];
$subject=$_Post['subject'];
$message=$_Post['message'];


$email_from='info_mdu@gmail.com';

$email_subject='New form submission';

$email_body="User Name:$name.\n".
            "User Email:$visitor_email.\n".
            "Subject:$subject.\n".
            "User Message:$message.\n".;

$to="bhishambalhara@gmail.com";

$headers ="from:$email_from \r\n";

$headers .="Reply-To:$visitor-email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location:uni_contactpage.html");
             
?>