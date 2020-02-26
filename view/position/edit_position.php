<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h2>Update Position</h2>
        </div>
        <div>
            <form method="post" action="view_position.php?page=edit" enctype="multipart/form-data">
                <input type="hidden" name="id_position" value="<?php echo $cup->id; ?>" />
                <div class="form-group">
                    <label>Name Position</label>
                    <input type="text" name="name_position" value="<?php echo $cup->name; ?>" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div>
                        <input type="file" name="image" id="image">
                        <img src="<?= 'data:image;base64,' . base64_encode($cup->image) ?> " width="60px" height="60px">
                        </td>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-primary" />
                    <a href="view_position.php" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>