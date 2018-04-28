<div class="entry">
  <form class="form" action="update-entry.php" method="POST">
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
    <input type="submit" class="form-50" name="type" value="edit">
    <input type="submit" class="form-50" name="type" value="remove">
  </form>
</div>