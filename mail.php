<?php

if (issset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['tel'];
    $date = $_POST['date'];
    $country = $_POST['country'];
    $problem = $_POST['problem'];
    $contactsource = $_POST['contact-source'];
    $signup = $_POST['sign-up'];
    $to = 'whoeveriam09@gmail.com';
    $subject = 'Flash Motorcycles - Contact Us';
    $message = 'Name: ' . $name . '\r\n' . 'Email Address: ' . $email . '\r\n' . 'Mobile Number: ' . $number . '\r\n' . '\r\n' . 'Date of Submission: ' . $date . '\r\n' . 'Country: ' . $country . '\r\n' . '\r\n' . 'Comment: ' . $problem . '\r\n' . '\r\n' . 'How would they like to be contacted? ' . $contactsource . '\r\n' . 'Do they sign up for newsletter? ' . $signup;
    $headers = 'From: ' . $email;
    
    if (mail($to, $subject, $message, $headers)) {
        echo 'Your message has been shared to our team. We will contact you soon!' . '\r\n';
        echo '<a href="/"> Back to home </a>';
    }

    else {
        echo 'Warning: An error occured while sharing your message to the team members of Flash. Our developers are fixing the issue. Contact us again a few minutes later.' . '\r\n';
        echo '<a href="/"> Back to home </a>';
    }

}