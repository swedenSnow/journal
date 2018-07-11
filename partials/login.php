<?php
require_once '../classes/Database.php';
require_once '../classes/User.php';
$user = new User($pdo);

if(isset($_POST['submit'])){
    if ($user->login($_POST["username"], $_POST["password"])) {
        // Redirect on sucessful login
        header('Location: ../index.php?message=Login-success');
    } else {
        /**
         * If the user input the wrong password, redirect to index.php with
         * an error message or something that indicates what has gone wrong
         */
        header('Location: ../index.php?message=Login-Failed');    
    }   
}
?>


 

