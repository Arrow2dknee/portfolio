<?php
    // fetch the form fields after removing html tags and whitespaces if any
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // checking the data
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_SANITIZE_EMAIL)) {
        header("Location: http://.../index.php?success=-1#form");
        exit;
    }

    // set the recipient's email address
    $recipient = "antrosh92@gmail.com";

    // set the email subject
    $subject = "New contact from $name";

    // build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // build the email headers
    $email_headers = "From: $name <$email>";

    // send the email

    mail($recipient, $subject, $email_content, $email_headers);

    // redirect to index.html with success code
    header("Location: http://.../index.php?success=1#form");
?>