<h2>List National-Cup</h2>
<a href="view_nationalcup.php?page=add"><button type="button" class="btn btn-success">Add new National-Cup</button></a>
<br><br>
<br>
<div class="container">
    <table class="table table-hover" id="employee_data">
        <thead>
            <tr class="table-info">
                <th>Serial</th>
                <th>ID Nation</th>
                <th>Name Nation</th>
                <th>ID Cup</th>
                <th>Name Cup</th>
                <th>Option</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php foreach ($clubleagues as $key => $clubleague) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $clubleague->idclub ?></td>
                <td><?php echo $clubleague->nameclub ?></td>
                <td><?php echo $clubleague->idleague ?></td>
                <td><?php echo $clubleague->nameleague ?></td>
                <td> <a href="view_nationalcup.php?page=delete&id1=<?php echo $clubleague->idclub; ?>&id2=<?php echo $clubleague->idleague; ?>"
                        class="btn btn-warning btn-sm">Delete</a></td>
                <td> <a href="view_nationalcup.php?page=edit&id1=<?php echo $clubleague->idclub; ?>&id2=<?php echo $clubleague->idleague; ?>"
                        class="btn btn-primary btn-sm">Update</a></td>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>