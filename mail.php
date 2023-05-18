<?php
// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $cp = trim($_POST["cp"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if (empty($name) or empty($cp) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Veuillez remplir le formulaire et réessayer.";
        exit;
    }

    // Set the recipient email address.
    // Note:  Update this to your desired email address.
    $recipient = "express.debouchage@gmail.com";

    // Set the email subject.
    $subjectname = "Nouveau Contact $cp";
    $msg = file_get_contents("shared/mail-template.php");


    // Build the email content.
    $msg = str_replace("__nom__", $name, $msg);
    $msg = str_replace("__tel__", $phone, $msg);
    $msg = str_replace("__cp__", $cp, $msg);
    $msg = str_replace("__email__", $email, $msg);
    $msg = str_replace("__message__", $message, $msg);


    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";



    // Send the email.
    if (mail($recipient, $subjectname, $msg, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Je vous remercie! Votre message a été envoyé.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oups ! Quelque chose s'est mal passé et nous n'avons pas pu envoyer votre message.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "Il y a eu un problème avec votre soumission, veuillez réessayer.";
}

?>
