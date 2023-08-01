<!-- File: app/Views/admin/login.php -->

<!DOCTYPE html>
<html>

<head>
  <title>Admin Login</title>
</head>

<body>
  <div class="container">
    <h1>Admin Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
      <p>
        <?= session()->getFlashdata('error'); ?>
      </p>
    <?php endif; ?>

    <?= form_open('login/attempt'); ?>
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br>

    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>

    <input type="submit" value="Login">
    <?= form_close(); ?>
  </div>
</body>

</html>