<?php
//Fail :/
require_once '/partials/database.php';
class User
{

  public function login($username, $password)
  {
    // Prepare 
    $sql=  "SELECT * FROM users
    WHERE username = :username";
    $statement = $pdo->prepare($sql);
    // Execute
    $statement->execute([
      "username" => $username
    ]);
    //Fetch
    $user = $statement->fetch();
    // check hashed password
    if (password_verify($password, $user["password"])) {
      $_SESSION["loggedIn"] = true;
      $_SESSION["username"] = $user["username"];
      $_SESSION["userID"] = $user["userID"];
      session_set_cookie_params(3600);
      return true;
    } else {
      return false;
    }
  }

  public function isLoggedIn()
  {
    if( isset($_SESSION["loggedIn"]) ){
      return true;
    } else {
      return false;
    }
  }
  public function logout()
  {
    session_unset();
    session_destroy();
  }
}