<!-- This code will make sure that the queries or comments submitted on the website is delivered at your email address. -->

<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['mobile'];
$message = $_POST['message'];


$email_form = 'infoBEU@gmail.com'
$emai_subject = 'New Form Submission'
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n"
                "Subject: $subject.\n"
                "User message: $message.\n"

$to = 'your@gmail.com';

$headers = "From : $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$emai_subject,$email_body,$headers);

header("Location: contact.html")
?>

<!-- Do not worry about this php file you will learn about this in future till then take this as an example of how this language works. -->