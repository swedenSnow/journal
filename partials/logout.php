<?php
//Logout 
// session_start();
// session_destroy();
require '../classes/UserCheck.php';
require 'session_start.php';
$user = new User($pdo);
$user->logout();
header("Location: ../index.php?message=You_are_logged_out");