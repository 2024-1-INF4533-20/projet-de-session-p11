<?php
// Paramètres de connexion à la base de données MySQL
$servername = "localhost"; // Adresse du serveur MySQL
$username = "votre_nom_utilisateur"; // Nom d'utilisateur MySQL
$password = "votre_mot_de_passe"; // Mot de passe MySQL

// Récupération des données du formulaire d'inscription
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Connexion à MySQL
$conn = new mysqli($servername, $username, $password);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Création d'une nouvelle base de données pour l'utilisateur
$databaseName = "user_" . uniqid(); // Génère un nom unique pour la base de données de l'utilisateur
$sql = "CREATE DATABASE $databaseName";
if ($conn->query($sql) === TRUE) {
    echo "Base de données créée avec succès";
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Sélection de la nouvelle base de données
$conn->select_db($databaseName);

// Création de la table pour stocker les informations de l'utilisateur
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table créée avec succès";
} else {
    echo "Erreur lors de la création de la table : " . $conn->error;
}

// Insertion des données de l'utilisateur dans la table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Utilisateur inscrit avec succès";
} else {
    echo "Erreur lors de l'inscription de l'utilisateur : " . $conn->error;
}

// Fermeture de la connexion à MySQL
$conn->close();
?>

