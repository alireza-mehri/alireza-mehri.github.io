<?php
$to = "rexdesignir@outlook.com";
$subject = "Contact form";
$fromName = "$email";
$headers = "From : $fromName";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];

$massage .="
    name : ".($name)."\n
    mail : ".($email)."\n
    subject : ".($subject)."\n
    name : ".($comments)."\n
";

$body = "Name: $name\r\n E-Mail: $email\r\n Message:\r\n $comments";

$flgchk = mail ("$to", "$subject", "$body", "$headers");
if($flgchk){
    echo "A email has been sent to: $to";
   }
  else{
    echo "Error in Email sending";
  }
  
?>