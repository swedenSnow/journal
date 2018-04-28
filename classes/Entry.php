<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once 'DataBase.php';

class Entry

{
  private $database;
  function __construct($database){
    $this->database = $database;
  }


  public function getAllEntries($userID){
    $sql="SELECT * FROM entries
    WHERE userID = :userID
    ORDER BY createdAt DESC";
    $statement = $this->database->prepare($sql);
    $statement->execute([
      ":userID" => $userID
    ]);
    return $statement->fetchAll();
  }
  public function getEntry($entryID){
    $sql=  "SELECT * FROM entries
    WHERE entryID = :entryID";
    $statement = $this->database->prepare($sql);
    $statement->execute([
      ":entryID" => $entryID
    ]);
    return $statement->fetch();
  }
  public function removeEntry($entryID){
    $sql=  "DELETE FROM entries WHERE entryID = :entryID";
    $statement = $this->database->prepare($sql);
    $statement->execute([
      ":entryID" => $entryID
    ]);
  }
  public function postNewEntry($title, $content, $userID){
    $sql=  "INSERT INTO entries
    (title, content, userID, createdAt)
    VALUES (:title, :content, :userID, :createdAt)";
    $statement = $this->database->prepare($sql);
    $statement->execute([
      ":title" => $title,
      ":content" => $content,
      ":userID" => $userID,
      ":createdAt" => date("Y-m-d H:i:s")
    ]);
  }
  public function updateEntry($title, $content, $entryID){
    $sql="UPDATE entries SET title = :title, content = :content WHERE entryID = :entryID";
    $statement = $this->database->prepare($sql);
    $statement->execute([
      ":title" => $title,
      ":content" => $content,
      ":entryID" => $entryID
    ]);
  }
}