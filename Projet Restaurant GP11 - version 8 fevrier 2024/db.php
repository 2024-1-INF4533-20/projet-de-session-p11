<?php
// Informations de connexion à la base de données pour XAMPP
$servername = "localhost";
$username = ""; // Laissez-le vide ou utilisez "root" si vous n'avez pas changé le nom d'utilisateur par défaut.
$password = ""; // Laissez-le vide ou utilisez "" si vous n'avez pas défini de mot de passe pour MySQL.
$database = "bd"; // Nom de votre base de données.

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
?>
