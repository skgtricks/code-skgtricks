<?php

$to = 'shivamg111999@gmail.com';
$subject = 'My is an email';
$body = 'This is an email body';
$headers = 'from : Someone@gmail.com';



if (mail($to, $subject, $body, $headers)){
	echo "Email has been sent to" . $to;
} else {
echo "There was an error";

}



?>
