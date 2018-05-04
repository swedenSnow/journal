<?php
require_once '../classes/UserCheck.php';
require_once '../classes/DataBase.php';
$user = new User($pdo);
$user->new_user($_POST["username"], $_POST["password"]);
$user->login($_POST["username"], $_POST["password"]);
header("Location: ../index.php?message=You_are_now_logged_in");
;?>