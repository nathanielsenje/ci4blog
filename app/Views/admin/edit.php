<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link rel="icon" href="https://alaf.co.tz/assets/uploads/favicon.ico" sizes="32x32" />
  <title>Admin Dahsboard</title>
</head>

<body>
  <h1>Edit Blog Post</h1>

  <?= form_open('admin/update/' . $post['id']); ?>
  <label for="title">Title:</label>
  <input type="text" name="title" value="<?= $post['title']; ?>" required>
  <br>

  <label for="content">Content:</label>
  <textarea name="content" rows="5" required><?= $post['content']; ?></textarea>
  <br>

  <input type="submit" value="Update">
  <?= form_close(); ?>
</body>

</html>