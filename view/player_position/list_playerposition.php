<h2>List Player-Position</h2>

<!-- If admin, you can edit file -->
<?php if (admin()) : ?>

<a href="view_playerposition.php?page=add"><button type="button" class="btn btn-success">Add new
        Player-Position</button></a> <br><br>

<?php endif; ?>

<div class="container">
    <table class="table table-hover" id="employee_data">
        <thead>
            <tr class="table-info">
                <th>Serial</th>

                <?php if (admin()) : ?>

                <th>ID Player</th>

                <?php endif; ?>

                <th>Name Player</th>
                <th>Name Position</th>

                <!-- If admin, you can edit file -->
                <?php if (admin()) : ?>

                <th colspan="2">Option</th>

                <?php endif; ?>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php foreach ($clubleagues as $key => $clubleague) : ?>
            <tr>
                <td><?php echo ++$key ?></td>

                <?php if (admin()) : ?>

                <td><?php echo $clubleague->idclub ?></td>

                <?php endif; ?>

                <td><?php echo $clubleague->nameclub ?></td>
                <td><?php echo $clubleague->nameleague ?></td>

                <!-- If admin, you can edit file -->
                <?php if (admin()) : ?>

                <td> <a href="view_playerposition.php?page=delete&id1=<?php echo $clubleague->idclub; ?>&id2=<?php echo $clubleague->idleague; ?>"
                        class="btn btn-warning btn-sm">Delete</a></td>
                <td> <a href="view_playerposition.php?page=edit&id1=<?php echo $clubleague->idclub; ?>&id2=<?php echo $clubleague->idleague; ?>"
                        class="btn btn-primary btn-sm">Update</a></td>

                <?php endif; ?>

                <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Jquery search -->
<script src="/public/js/search.js"></script>