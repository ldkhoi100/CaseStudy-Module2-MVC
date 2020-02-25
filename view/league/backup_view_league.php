<h2>List league deleted</h2>

<table class="table table-hover" id="employee_data">
    <thead>
        <tr class="table-info">
            <th>Serial</th>
            <th>ID</th>
            <th>Name League</th>
            <th>Image</th>
            <th>Option</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="myTable">
        <?php foreach ($leagues as $key => $league) : ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $league->id ?></td>
            <td><?php echo $league->name ?></td>
            <td><img src="<?= 'data:image;base64,' . base64_encode($league->image) ?> " width="60px" height="60px"></td>
            <td> <a href="view_league.php?page=backupfile&id=<?php echo $league->id; ?>"
                    class="btn btn-warning btn-sm">Back Up File</a></td>
            <td> <a href="view_league.php?page=deleteForever&id=<?php echo $league->id; ?>"
                    class="btn btn-danger btn-sm">Delete Forever</a>
            </td>
            <?php endforeach; ?>
    </tbody>
</table>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>