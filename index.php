<?php 
require 'partials/session_start.php';
require_once 'partials/head.php';
include_once 'partials/navbar.php';
require 'classes/UserCheck.php';
$user = new User();
var_dump($user->isLoggedIn());
// require 'session_start.php';
if ($user->isLoggedIn()) { 
    include_once 'partials/get_all_entries.php'; 
} else {
    include_once 'partials/head.php';
    include_once 'partials/navbar.php';
}

// require_once 'partials/database.php';
// require_once 'partials/login.php';
//! Added hashed pwd with user
// --------------------------------------------------------------------------------------
// $hashed = password_hash("", PASSWORD_DEFAULT);
// $sql = 'INSERT INTO users (username, password) VALUES (:username, :password)';
// $statement =$pdo->prepare($sql);
// $statement->execute([
//   ":username" => "banani",
//   ":password" => $hashed // use the hashed password when saving to SQL
// ]);
// --------------------------------------------------------------------------------------


 ?>




<?php include_once 'partials/footer.php' ?>
