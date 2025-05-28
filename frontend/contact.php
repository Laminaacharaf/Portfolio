<?php
// Configuration : à personnaliser
$to = "achraflamina.com"; // Mon adresse email pour recevoir les messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sécuriser les champs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Vérification basique
    if (!empty($name) && !empty($email) && !empty($message)) {
        $subject = "Nouveau message de ton portfolio";
        $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

        $headers = "From: $email";

        // Envoi
        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Merci pour votre message !'); window.location.href='contact.html';</script>";
        } else {
            echo "<script>alert('Erreur lors de l’envoi.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Tous les champs sont obligatoires.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Méthode non autorisée.'); window.location.href='contact.html';</script>";
}
?>
<!DOCTYPE html>
<html lang="fr">