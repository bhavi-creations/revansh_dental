<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['appointment name'] ?? '';
    $phone = $_POST['appointment mail'] ?? '';
    $email = $_POST['appointment date'] ?? '';
    
  
    $message = $_POST['appointment time'] ?? '';


    echo $name;
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sairampenkey09@gmail.com'; // Your Gmail email address
        $mail->Password = 'shvubaorkaeviigk'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('sairampenkey09@gmail.com', 'ratnakar constructions'); // Your Gmail email and name
        $mail->addAddress('sairampenkey09@gmail.com', 'ratnakar constructions'); // Recipient's email and name

// Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Appointment form';
        $mail->Body = "
   
            <h1>New Appointment</h1>
            <p><strong>appointment name:</strong> $name</p>
            <p><strong>appointment mail:</strong> $phone</p>
            <p><strong>appointment date:</strong> $email</p>
         
        
            <p><strong>appointment time:</strong>$message</p>
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.php";</script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}


?>