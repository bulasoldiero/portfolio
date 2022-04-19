<?php
    $mail_to = 'dawid.jenerowicz@gmail.com'; // specify your email here
 
    // Assigning data from the $_POST array to variables
    $name = $_POST['name'];
    $mail_from = $_POST['email'];
    $message = $_POST['message'];
 
    // Construct email subject
    $subject = 'www.mysite.com Message from visitor ' . $name;
 
    // Construct email body
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mail_from . "\r\n";
    $body_message .= 'Phone: ' . $phone . "\r\n";
    $body_message .= 'Message: ' . $message;
 
    // Construct email headers
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);
 
    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = 'http://soldiero.linuxpl.eu/#contact';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent.');
        window.location = 'http://soldiero.linuxpl.eu/#contact';
    </script>
    <?php
    }
?>
