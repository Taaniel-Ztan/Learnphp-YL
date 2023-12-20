<?php if ($user) : ?>
  <p>ID: <?= $user->id ?></p>
  <p>Email: <?= $user->email ?></p>
  <p>Password Hash: <?= $user->password ?></p>
<?php else : ?>
  <p>User not found.</p>
<?php endif; ?>

<a href="/admin/users" class="button">Back to User List</a>