<?php 
require 'classes/User.php';
require_once 'partials/head.php';
include_once 'partials/navbar.php';
$user = new User($pdo);

if ($user->isLoggedIn()) { 
    require 'partials/get_all_entries.php'; 
    require 'partials/post_entry.php';
} else {
   require 'partials/register.php';
}?>
<?php include_once 'partials/footer.php' ?>

<!-- //! Added hashed pwd with user -->