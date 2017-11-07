<?php

error_reporting(1);
$firstname = 'First Name : ' . $_POST['first-name'] . "\r\n";
$lastname = 'Last Name : ' . $_POST['last-name'] . "\r\n";
$phone = 'Phonenumber : ' . $_POST['telephone'] . "\r\n";
$useremail = 'Email of User : ' . $_POST['email'] . "\r\n";
$usermessage = ' Message Send by User : ' . $_POST['message'] . "\r\n";

?>

<?php

$email_from = $_POST['useremail'];

$email_subject = "Message From A Contact From On Your Website";

$email_body = "$firstname\n".
               "$lastname\n".
               "$phone\n".
               "$useremail\n".
               "$usermessage\n"
?>


<?php

  $to = "bill@ogrelogic.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $emailaddress \r\n";

   if(mail($to,$email_subject,$email_body,$headers)){?>
   
   <script>window.location = "http://www.ilclimousine.com/booking/thankyou.html";</script>
 
<?php //header("Location: thankyou.html");
}
?>
