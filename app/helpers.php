<?php
// app/helpers.php
// Fonctions utilitaires simples et sécurisées pour le mini-blog.

/**
 * Échappe une chaîne pour l'affichage HTML.
 * @param string $str
 * @return string
 */
function e($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Redirection HTTP simple.
 * @param string $url
 */
function redirect($url) {
    header('Location: ' . $url);
    exit;
}

/**
 * Vérifie si l'utilisateur courant est l'auteur d'un post.
 * @param PDO $pdo
 * @param int $postId
 * @param int $userId
 * @return bool
 */
function is_author_of_post($pdo, $postId, $userId) {
    $stmt = $pdo->prepare('SELECT id FROM posts WHERE id = ? AND user_id = ? LIMIT 1');
    $stmt->execute([$postId, $userId]);
    return (bool) $stmt->fetch();
}