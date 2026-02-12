<?php
// app/auth.php
session_start();


function is_logged_in() {
return !empty($_SESSION['user_id']);
}


function require_login() {
if (!is_logged_in()) {
header('Location: /adebayodev/public/login.php');
exit;
}
}


function current_user_id() {
return $_SESSION['user_id'] ?? null;
}