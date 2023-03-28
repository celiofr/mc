<?php
// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

// Envoi des données par email
$to = 'votre@email.com';
$subject = 'Nouvel avis reçu';
$message = "Nom : $name\n\nEmail : $email\n\nNote : $rating\n\nCommentaire :\n$comment";
$headers = "From: $email";
mail($to, $subject, $message, $headers);

// Redirection vers la page de confirmation
header('Location: confirmation.html');
?>
