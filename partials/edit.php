<?php
require_once '../classes/DataBase.php';
require_once '../classes/Entry.php';
$entry = new Entry($pdo);
$entryID = $_POST['entryID'];
$title= $_POST['title'];
$content= $_POST['content'];
$entries = $entry->updateEntry($title, $content, $entryID);
var_dump($entries);


header("Location: ../index.php?message=Updated");


;?>