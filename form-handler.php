<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$visitor_organization = $_POST['org'];
$visitor_reason = $_POST['reason'];
$visitor_lead = $_POST['lead'];

$email_from = 'info@insuelec.com';

$email_subject = 'Lead';

$email_body = "Name Client: $name.\n".
              "Email Client: $visitor_email.\n".
              "Phone Number Client: $visitor_phone.\n".
              "Organization of the Client: $visitor_organization.\n".
              "Reason is Contacting Us: $visitor_reason.\n".
              "How did hear about us: $visitor_lead.\n";

$to = 'insuelec@insuelec.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>