
@extends('layouts.app')
<!--
?php>
$name = $_POST['name'];
$visitor_email = $_GET['email'];
$message_post = $_POST['message'];

$email_from = "colman.loch@gmail.com";
$email_submission = "New Form Submission";
$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message_post.\n";
$to = "rclck3@mail.missouri.edu";
$headers = "From: $email_from.\r\n";
$headers. = "Reply-to: $visitor_email\r\n";
mail($to, $email_submission, $email_body, $headers); ?>
 -->
@section('content')
    <div class="container">
        <div class="contact-title">
        <h1>Say Hello!</h1><h2>Please give us your feedback and suggestions on our website!</h2>
        </div>
        <div class="contact-form">
            <form id="contact-form" method="POST" action="">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                 <br>
                <input name="email" type="email" class="form-control" placeholder="Email" required> <br>
                    <textarea name="message" class="form-control" placeholder="Message" required></textarea> <br>
            <input type ="submit" class="form-control submit" value = "Send Message">
            </form>
        </div>
    </div>
@endsection
