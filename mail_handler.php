<?php 

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$email_message= "
Name: ".$fullname."
Email: ".$email."
Phone: ".$phone."
Message: ".$message."
";

mail ("hope@hcr-center.org", "Hope Community Resource Center", $email_message);

echo "Your message has been sent. We will contact you shorty.";
?>