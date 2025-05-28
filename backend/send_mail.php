<?php
require_once 'config.php';

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die('Adresse email invalide.');
}

$to = ADMIN_EMAIL;
$subject = "Message de $name via le portfolio";
$body = "Nom: $name\nEmail: $email\n\n$message";

$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
  echo "Message envoyé avec succès.";
} else {
  echo "Échec de l'envoi du message.";
}
// Redirection vers la page de contact après l'envoi
header('Location: ../frontend/contact.php?status=success');