<?php

require_once 'database.php';
require 'session_start.php';

// Fetch, not fetchAll
if(isset($_POST['submit'])){
    $sql = "SELECT * FROM users WHERE username = :username";
    $statement = $pdo->prepare($sql);
    $statement->execute(["username" => $_POST["username"]]);
    $user = $statement->fetch();
    if (password_verify($_POST["password"], $user["password"])) {
        // Redirect to the index page on sucessful login
        header('Location: ../index.php?message=Login-success');
       
        
    } else {
        /**
         * If the user input the wrong password, redirect to index.php with
         * an error message or something that indicates what has gone wrong
         */
        header('Location: ../index.php?message=Login-Failed');
        require_once 'navbar.php';
        
    }
    
}



?>


 

