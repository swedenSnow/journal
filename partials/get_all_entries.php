<?php
require_once 'database.php';

    $sql = "SELECT * FROM entries";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $entries = $statement->fetchAll();
    foreach ($entries as $post){
        echo '<br/><br/>' .$post['title']. '<br/>' .$post['content']. '<br/>';
    }