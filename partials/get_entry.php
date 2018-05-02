
<div class="entry">
  <form class="form" action="delete_edit.php" method="POST">
    <h3 class="entry-title">
      <?= $post["title"]; ?>
    </h3>
    <p class="para">
      <?= $post["content"]; ?>
    </p>
    <p class="entry-date">
        <?=$post['createdAt']; ?>
    </p>
    <input type="text" name="entryID" id="hide-id" value="<?= $post["entryID"] ?>">
    <input type="submit" class="edit-post" name="edit" value="edit">
    <input type="submit" class="remove-post" name="remove" value="remove">
  </form>
</div>
