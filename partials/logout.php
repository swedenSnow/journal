<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../classes/User.php';
$user = new User($pdo);
$user->logout();
header("Location: ../index.php?message=you are logged out");