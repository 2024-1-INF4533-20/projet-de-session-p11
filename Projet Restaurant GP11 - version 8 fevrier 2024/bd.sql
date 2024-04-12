-- Création de la base de données
CREATE DATABASE IF NOT EXISTS bd CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Utilisation de la base de données
USE bd;

-- Création de la table pour une nouvelle entité (par exemple, "autre_table")
CREATE TABLE IF NOT EXISTS autre_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    motdepasse VARCHAR(255) NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
