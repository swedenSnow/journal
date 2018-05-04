<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
require_once 'classes/UserCheck.php';
require_once 'classes/Entry.php';
require_once 'classes/DataBase.php';
require_once 'partials/head.php'; 
$user = new User($pdo);
$entries = new Entry($pdo);

if($user->isLoggedIn() && isset($_POST["remove"])){
    $entries->removeEntry($_POST["entryID"]);
    header("Location: index.php?message=success entry_removed");
}
else if($user->isLoggedIn() && isset($_POST["edit"])){
    $entry = $entries->getEntry($_POST["entryID"]);?>   
        <div class="new-entry-edit">
            <div class="title entry-header-edit">
                <h1>Edit Post</h1>
            </div>
        </div>    
        <div class="form-wrapper">
            <form class="form entry-form" action="partials/edit.php" method="POST">
                <input type="text" name="title" placeholder="Title" id="edit-title" value="<?= $entry["title"] ?>">
                <br>
                <textarea name="content" placeholder="Content" id="edit-para"><?= $entry["content"] ?></textarea>
                <br>
                <input type="text" name="entryID" id="hide-id" value="<?= $_POST["entryID"] ?>">
                <button type="submit" name="submit-update" class="btn submit-new">Update Post</button>
                <button type="submit" name="submit-back" class="btn submit-new">⏎ Back to entries</button>
            </form>
        </div>
<?php }?>

<?php require 'partials/footer.php'; ?>