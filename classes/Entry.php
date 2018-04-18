<?php
class Entry
{
 //
  public function getAllEntries($userID){
    $sql="SELECT * FROM entries
    WHERE userID = :userID
    ORDER BY createdAt DESC";
    $statement = $pdo->prepare($sql); //?? 
    $statement->execute([
      ":userID" => $userID
    ]);
    return $statement->fetchAll();
  }
  public function getEntry($entryID){
    $sql=  "SELECT * FROM entries
    WHERE entryID = :entryID";
    $statement = $pdo->prepare($sql);
    $statement->execute([
      ":entryID" => $entryID
    ]);
    return $statement->fetch();
  }
  public function removeEntry($entryID){
    $sql=  "DELETE FROM entries WHERE entryID = :entryID";
    $statement = $this->db->prepare(
      "DELETE FROM entries WHERE entryID = :entryID"
    );
    $statement->execute([
      ":entryID" => $entryID
    ]);
  }
  public function postNewEntry($title, $content, $userID){
    $statement = $this->db->prepare(
      "INSERT INTO entries
      (title, content, userID, createdAt)
      VALUES (:title, :content, :userID, :createdAt)"
    );
    $statement->execute([
      ":title" => $title,
      ":content" => $content,
      ":userID" => $userID,
      ":createdAt" => date("Y-m-d H:i:s")
    ]);
  }
  public function updateEntry($title, $content, $entryID){
    $statement = $this->db->prepare(
      "UPDATE entries SET title = :title, content = :content WHERE entryID = :entryID"
    );
    $statement->execute([
      ":title" => $title,
      ":content" => $content,
      ":entryID" => $entryID
    ]);
  }
}