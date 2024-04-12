<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hasher le mot de passe (pour des raisons de sécurité)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Requête SQL pour insérer l'utilisateur dans la base de données
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashed_password);

    // Exécution de la requête préparée
    if ($stmt->execute()) {
        // Rediriger vers une page de profil avec un message de succès
        header("Location: profil.php?inscription=success");
        exit;
    } else {
        // Afficher un message d'erreur si l'inscription a échoué
        $error_message = "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
    }
}
?>
