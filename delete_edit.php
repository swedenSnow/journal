<?php
require 'partials/session_start.php';
require_once 'classes/UserCheck.php';
require_once 'classes/Entry.php';
require_once 'classes/DataBase.php';
require_once 'partials/head.php'; 

$user = new User($pdo);
$entries = new Entry($pdo);


if($user->isLoggedIn() && isset($_POST["remove"])){
    $entries->removeEntry($_POST["entryID"]);
    header("Location: index.php?message=The entry was removed!");
}

else if($user->isLoggedIn() && isset($_POST["edit"])){
    $entry = $entries->getEntry($_POST["entryID"]);?>
    
    <header>
        <div class="container">
            <div class="title">
                <h2>Edit Post</h2>
            </div>
    </header>
    <form class="form entry-form" action="partials/edit.php" method="POST">
      <input type="text" name="title" placeholder="Title" id="edit-title" value="<?= $entry["title"] ?>">
      <br>
      <textarea name="content" placeholder="Content" id="edit-para"><?= $entry["content"] ?></textarea>
      <br>
      <input type="textdomain" name="entryID" id="hide-id" value="<?= $_POST["entryID"] ?>">
      <input type="submit" value="Submit">
    </form>
</div>
    
<?php }?>

<?php require 'partials/footer.php'; ?>