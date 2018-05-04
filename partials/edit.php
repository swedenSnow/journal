<?php
require_once '../classes/DataBase.php';
require_once '../classes/Entry.php';
$entry = new Entry($pdo);
$entryID = $_POST['entryID'];
$title= htmlentities($_POST['title']);
$content= htmlentities($_POST['content']);
$entries = $entry->updateEntry($title, $content, $entryID);

header("Location: ../index.php?message=Updated-post");

;?>