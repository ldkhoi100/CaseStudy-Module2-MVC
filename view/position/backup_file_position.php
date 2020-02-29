<?php if (admin()) : ?>

<h1 style='color:red;'>Do you want back up position <?= isset($cup->name) ? $cup->name : ''; ?>?</h1> <br>

<div class="alert alert-warning">
    <strong>Warning!</strong> This position will be back up now
</div>

<h3><u>ID position</u>: <?= isset($cup->id) ? $cup->id : ''; ?> <br>
    <u>Name position</u>: <?= isset($cup->name) ? $cup->name : ''; ?>
</h3> <br>

<form action="view_position.php?page=backupfile" method="post">
    <input type="hidden" name="id" value="<?php echo $cup->id; ?>" />
    <div class="form-group">
        <input type="submit" value="Back up" class="btn btn-danger" />
        <a class="btn btn-info" href="view_position.php?page=backup_position" style="margin-left: 5px;">Cancel</a>
    </div>
</form>

<!-- else, display notfound page -->
<?php else : ?>
<h1 style="color:red; text-align:center;">Not found</h1>
<?php endif; ?>