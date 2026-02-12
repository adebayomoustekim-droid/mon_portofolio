<?php
// app/db.php
// Connexion PDO simple et sécurisée — modifier les paramètres si besoin
$host = '127.0.0.1';
$db = 'adebayodev';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES => false,
];


try {
$pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
// En local, on peut afficher l'erreur pour déboguer
echo 'Erreur de connexion à la base de données : ' . $e->getMessage();
exit;
}