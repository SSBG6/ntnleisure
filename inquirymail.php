<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/Exception.php';
require 'vendor/PHPMailer.php';
require 'vendor/SMTP.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // SMTP server
    $mail->SMTPAuth   = true;                // Enable SMTP authentication
    $mail->Username   = 'nntninquiriesgmai@gmail.com';  // SMTP username
    $mail->Password   = 'app password';     // SMTP password
    $mail->SMTPSecure = 'tls';               // Enable TLS encryption; `ssl` also accepted'
    $mail->Port       = 587;                 // TCP port to connect to

    // Sender information
    $mail->setFrom($email, $name);
    
    // Recipient
    $mail->addAddress('nalaka@ntnleisure.com', 'NTN Leisure');

    // Content
    $mail->isHTML(true);
    $mail->Subject = "$name's Inquiry";
    $mail->Body    ="<p><strong>Name:</strong> $name</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Inquiry:</strong> $message</p>
                        ";

    // Send the email
    $mail->send();
    
    echo '<script>alert("Your inquiry has been sent successfully. We will get back to you soon.")</script>';
    echo '<script>window.location.href = "index.php";</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
