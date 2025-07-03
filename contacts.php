<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = nl2br(htmlspecialchars($_POST["message"]));
    $newsletter = isset($_POST["newsletter"]) ? "Yes" : "No";

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tharindusamarakoon1234@gmail.com';           // 🔁 Replace with your Gmail
        $mail->Password   = '';         // 🔁 Replace with App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, "$firstName $lastName");
        $mail->addAddress('tharindusamarakoon1234@gmail.com');            // 🔁 Replace with your Gmail again

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "Contact Form: $subject";
        $mail->Body    = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> $firstName $lastName</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Newsletter:</strong> $newsletter</p>
            <p><strong>Message:</strong><br>$message</p>
        ";

        $mail->send();
        echo "<h2 style='color:green;text-align:center;'>✅ Message sent successfully to your email!</h2>";
    } catch (Exception $e) {
        echo "<h2 style='color:red;text-align:center;'>❌ Message could not be sent.</h2>";
        echo "Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
