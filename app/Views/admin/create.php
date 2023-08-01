<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link rel="icon" href="https://alaf.co.tz/assets/uploads/favicon.ico" sizes="32x32" />
  <title>ALAF Blog</title>
</head>

<body>
  <h1>Add New Blog Post</h1>

  <?= form_open('admin/create'); ?>
  <label for="title">Title:</label>
  <input type="text" name="title" required>
  <?php if (isset($validation) && $validation->hasError('title')): ?>
    <p>
      <?= $validation->getError('title'); ?>
    </p>
  <?php endif; ?>
  <br>

  <label for="content">Content:</label>
  <textarea name="content" rows="5" required></textarea>
  <?php if (isset($validation) && $validation->hasError('content')): ?>
    <p>
      <?= $validation->getError('content'); ?>
    </p>
  <?php endif; ?>
  <br>

  <input type="submit" value="Save">
  <?= form_close(); ?>
</body>

</html>