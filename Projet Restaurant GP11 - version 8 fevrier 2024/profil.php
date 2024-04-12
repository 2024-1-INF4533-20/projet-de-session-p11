<?php
// Informations de connexion à la base de données pour XAMPP
$servername = "localhost";
$username = "root"; // Utilisez "root" si vous n'avez pas changé le nom d'utilisateur par défaut.
$password = ""; // Laissez-le vide si vous n'avez pas défini de mot de passe pour MySQL.
$database = "db"; // Nom de votre base de données.

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant du coin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesprofil.css">
    <style>
        /* Additional styling for input fields */
        input[type="text"],
        input[type="password"] {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Vos éléments de navigation ici -->
        <a class="navbar-brand" href="#">Restaurant du coin</a>
    </nav>

    <!-- Contenu de la page -->
    <div class="container">
        <div class="login-container">
            <h2>Connexion</h2>
            <!-- Votre formulaire de connexion ici -->
            <form method="post" action="login.php">
                <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
            <!-- Afficher un message d'erreur ici si nécessaire -->
        </div>
    </div>

    <!-- Scripts Bootstrap (si nécessaires) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Votre script JavaScript ici
    </script>
</body>
</html>
