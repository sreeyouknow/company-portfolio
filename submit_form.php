<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_type']) && $_POST['form_type'] === 'contact') {
    // Sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP server settings
        $mail->isSMTP();                                      // Use SMTP
        $mail->Host       = 'smtp.hostinger.com';             // SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'amsaraj@royallipstech.com';      // SMTP username (your email)
        $mail->Password   = 'Seo54321!!!A';                 // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // Use SSL
        $mail->Port       = 465;                              // TCP port for SSL

        // Email sender and recipient
        $mail->setFrom('amsaraj@royallipstech.com', 'Amsaraj'); // Sender's email and name
        $mail->addAddress('amsaraj@royallipstech.com', 'Amsaraj'); // Recipient's email and name
        $mail->addReplyTo($email, $name);                     // Reply-to email and name

        // Email content
        $mail->isHTML(true);                                  // Email format as HTML
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <h1>New Message from Contact Form</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email
        $mail->send();
        header("Location: index.php?status=success&message=" . urlencode("Message has been sent successfully."));
        exit();
    } catch (Exception $e) {
        // Catch errors and redirect with error message
        header("Location: index.php?status=error&message=" . urlencode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
        exit();
    }
} else {
    header("Location: index.php?status=error&message=" . urlencode("Invalid form submission."));
    exit();
}
?>
