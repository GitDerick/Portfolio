<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse e-mail où envoyer le message
    $to = "votre-email@example.com"; // Remplacez par votre adresse e-mail
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Contenu du message
    $body = "Nom: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Envoi du message
    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
