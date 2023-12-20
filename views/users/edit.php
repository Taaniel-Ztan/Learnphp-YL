<?php include __DIR__ . '/../partials/header.php'; ?>

<div class="container">
    <h1 class="is-size-1">Edit User</h1>

    <form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" name="email" id="email" value="<?=$user->email?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input class="input" type="password" name="password" id="password">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Update">
            </div>
        </div>
    </form>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
