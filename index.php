<?php 
require 'classes/UserCheck.php';
$user = new User($pdo);
require_once 'partials/head.php';
include_once 'partials/navbar.php';
// var_dump($user->isLoggedIn());
// require 'session_start.php';
if ($user->isLoggedIn()) { 
    require 'partials/get_all_entries.php'; 
    require 'partials/post_entry.php';
} else {
   require 'partials/register.php';
}

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
