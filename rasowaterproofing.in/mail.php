<?php 
$field_name = $_POST['name'];
 $field_email = $_POST['email']; 
 $field_phone = $_POST['phone'];
  $field_subject = $_POST['subject'];
  $field_address = $_POST['address'];
   $mail_to = 'softgainstech431@gmail.com';
    $subject = 'Message from a site visitor '.
    $field_name;
     $body_message = 'From: '.
    $field_name."\n"; 
    $body_message .= 'E-mail: '.
    $field_email."\n";
     $body_message .= 'Phone: '.
     $field_phone."\n"; 
     $body_message .= 'address: '.
     $field_message;
      $headers = 'From: '.
      $field_email."\r\n"; 
      $headers .= 'Reply-To: '.
      $field_email."\r\n";
      $mail_status = mail($mail_to, $subject, $body_message, $headers); if ($mail_status) { ?>    
       <script language="javascript" type="text/javascript">         alert('Thank you for the message. We will contact you shortly.');
       window.location = 'index.html';     </script> <?php } else { ?>     <script language="javascript" type="text/javascript">         alert('Message failed. Please, send an email to gordon@template-help.com');         window.location = 'index.html';     </script> <?php } ?>