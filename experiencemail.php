<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/Exception.php';
require 'vendor/PHPMailer.php';
require 'vendor/SMTP.php';

function sanitize($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

// Retrieve sanitized form data
$title = sanitize($_POST['title'] ?? '');
$name = sanitize($_POST['name'] ?? '');
$email = sanitize($_POST['email'] ?? '');
$phone = sanitize($_POST['phone'] ?? '');
$country = sanitize($_POST['country'] ?? '');
$budget = sanitize($_POST['budget'] ?? '');
$dateRange = sanitize($_POST['date_range'] ?? '');
$noOfNights = sanitize($_POST['no_of_nights'] ?? '');
$flexibility = sanitize($_POST['flexibility'] ?? '');
$adults_13_17_quantity = sanitize($_POST['a1317'] ?? '');
$adults_18_64_quantity = sanitize($_POST['a1864'] ?? '');
$adults_65_quantity = sanitize($_POST['adults_65_quantity'] ?? '');
$children_0_2_quantity = sanitize($_POST['c02'] ?? '');
$children_3_5_quantity = sanitize($_POST['c35'] ?? '');
$children_6_11_quantity = sanitize($_POST['c611'] ?? '');
$hotelType = sanitize($_POST['hotel_type'] ?? '');
$hotelType2 = sanitize($_POST['hotel_type2'] ?? '');
$specialInterests = implode(", ", $_POST['special_interests'] ?? []);
$requirements = sanitize($_POST['requirements'] ?? '');
$tadult = $adults_13_17_quantity + $adults_18_64_quantity + $adults_65_quantity;
$tchild = $children_0_2_quantity + $children_3_5_quantity + $children_6_11_quantity;
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

    $mail->isHTML(true);
    $mail->Subject = "$title $name's Bespoke Inquiry";
    $mail->Body    = "
        <p><strong>Inquiry made by :</strong> $title $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Country:</strong> $country</p>
        <p><strong>Budget (USD):</strong> $$budget</p>
        <p><strong>Date Range:</strong> $dateRange</p>
        <p><strong>Number of Nights:</strong> $noOfNights</p>
        <p><strong>Flexibility of Dates:</strong> $flexibility</p>
        <br>
        <p><strong>Total Adults:</strong> $tadult</p>
        <ul>
        <li><p><strong>Adults in the Age Range (13-17):</strong> $adults_13_17_quantity</p></li>
        <li><p><strong>Adults in the Age Range (18-64):</strong> $adults_18_64_quantity</p></li>
        <li><p><strong>Adults in the Age Range (65+):</strong> $adults_65_quantity</p></li>
        </ul>
        <br>
        <p><strong>Total Children:</strong> $tchild</p>
        <ul>
        <li><p><strong>Children in the Age Range (0-2):</strong> $children_0_2_quantity</p></li>
        <li><p><strong>Children in the Age Range (3-5):</strong> $children_3_5_quantity</p></li>
        <li><p><strong>Children in the Age Range (6-11):</strong> $children_6_11_quantity</p></li>
        </ul>
        <br>
        <p><strong>Hotel Type:</strong> $hotelType to $hotelType2</p>
        <p><strong>Special Interests:</strong> $specialInterests</p>
        <p><strong>Requirements:</strong> $requirements</p>
    ";

    // Send the email
    $mail->send();
    
    echo '<script>alert("Your inquiry has been sent successfully. We will get back to you soon.")</script>';
    echo '<script>window.location.href = "index.php";</script>';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
