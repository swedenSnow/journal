<?php
require_once '../classes/User.php';
require_once '../classes/Database.php';
$user = new User($pdo);
$user->new_user($_POST["username"], $_POST["password"]);
$user->login($_POST["username"], $_POST["password"]);
header("Location: ../index.php?message=You_are_now_logged_in");
;?>