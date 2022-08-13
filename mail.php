<?php 
(isset($_POST['submit'])){
    $to="whoeveriam09@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $date = $_POST['date'];
    $country = $_POST['country'];
    $review = $_POST['problem'];
    $contactsource = $_POST['contact-source'];
    $signup = $_POST['sign-up'];
    $subject = "Form submission (Contact Us- Flash Motos)";
    $subject2 = "Copy of the Contact Us form submitted to Flash Motorcycles";
    $message = "Name:" . $name . "\n\n" . "E-Mail:" . $from . "\n\n" . "Phone Number:" . $tel . "\n\n" . "Birth date:" . $date . "\n\n" . "Country:" . $country . "\n\n" ."Review:" . $review . "Agreement to newsletter:" . $signup . "\n\n" . "How to be contacted:". $contactsource . $_POST['message'];
    $message2="Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to; }

     if (mail($to, $subject, $message, $headers)) {
        echo "Thank you. Your review has been sent to Flash Motorcycles. They will respond shortly.";
    }
    else {
        echo "Error! Your review could not be sent to Flash Motorcycles due to some technical errors!";
    }
?>