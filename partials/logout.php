<?php
//Logout 
// session_start();
// session_destroy();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../classes/UserCheck.php';
$user = new User($pdo);
$user->logout();
header("Location: ../index.php?message=You_are_logged_out");