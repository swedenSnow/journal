<?php
require_once '../classes/Database.php';
require_once '../classes/Entry.php';

$entry = new Entry($pdo);
$userID = $_SESSION['userID'];
//!Using htmlentities  to convert characters to HTML entities
$title= htmlentities($_POST['title']);
$content= htmlentities($_POST['content']);
$entries = $entry->postNewEntry($title, $content, $userID);

header("Location: ../index.php?message=added_post");
;?>