<!-- users/new.php -->

<h1>Create New User</h1>

<form action="/admin/users" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit" class="button is-primary">Create User</button>
</form>
