<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data form
    $to = "githlemon@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "You have received a new message from your contact form.\n\n"
             . "Name: {$_POST['name']}\n"
             . "Email: {$_POST['email']}\n"
             . "Phone: {$_POST['phone']}\n"
             . "Message:\n{$_POST['message']}\n";
    $headers = "From: {$_POST['email']}\r\nReply-To: {$_POST['email']}";

    // Mengirim email
    echo mail($to, $subject, $message, $headers) ? "Message sent successfully!" : "Failed to send message.";
    error_log("Reached mail function");
if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}

}
?>
