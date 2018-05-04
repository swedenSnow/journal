<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once 'Database.php';
class User
{
  private $database;
  function __construct($database){
    $this->database = $database;
  }
  
  public function login($username, $password)
  {

    $sql=  "SELECT * FROM users
    WHERE username = :username";
    $statement = $this->database->prepare($sql);
    // Execute
    $statement->execute([
      "username" => $username
    ]);
    $user = $statement->fetch();
      
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

  public function new_user($username, $password){
  
    $sql= "INSERT INTO users (username, password)
          VALUES (:username, :password)";
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $statement = $this->database->prepare($sql);
    $statement->execute([
      ":username" => $username,
      ":password" => $hashed
    ]);
  }

  public function logout()
  {
    session_unset();
    session_destroy();
  }

}
