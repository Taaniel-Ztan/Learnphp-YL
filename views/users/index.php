<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
    <h1 class="is-size-1">User Listing</h1>

    <table class="table is-striped is-fullwidth">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <!-- Add other columns as needed -->
            <th>Actions</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->email?></td>
                    <!-- Add other columns as needed -->
                    <td>
                        <div class="buttons has-addons">
                        <a class="button is-info" href="/admin/users/view?id=<?=$user->id?>">View</a>
                            <a class="button is-warning" href="/admin/users/edit?id=<?=$user->id?>">Edit</a>
                            <a class="button is-danger" href="/admin/users/delete?id=<?=$user->id?>">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>
