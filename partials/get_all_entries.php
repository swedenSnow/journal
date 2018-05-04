
<div class="all-entries">
    <h2 class="title prev-entries">Previous entries</h2>     
<?php 
require_once 'classes/Entry.php';
$entry = new Entry($pdo);
$userID = $_SESSION['userID'];
$entries = $entry->getAllEntries($userID);
foreach ($entries as $post):
include 'get_entry.php';
endforeach;?>


