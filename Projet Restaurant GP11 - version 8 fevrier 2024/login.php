<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Requête SQL préparée pour vérifier les identifiants de connexion
    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Utilisateur authentifié, rediriger vers le profil
        header("Location: profil.php");
        exit;
    } else {
        // Identifiants invalides, afficher un message d'erreur
        $error_message = "Identifiants de connexion invalides. Veuillez réessayer.";
    }
}
?>
