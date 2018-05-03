
<?php
require_once '../classes/DataBase.php';
require_once '../classes/Entry.php';

$entry = new Entry($pdo);
$userID = $_SESSION['userID'];
$title= $_POST['title'];
$content= $_POST['content'];

$entries = $entry->postNewEntry($title, $content, $userID);

header("Location: ../index.php?message=added_post");


;?>