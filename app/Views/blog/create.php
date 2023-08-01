<!-- File: app/Views/blog/create.php -->
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link rel="icon" href="https://alaf.co.tz/assets/uploads/favicon.ico" sizes="32x32" />
  <title>ALAF Blog</title>
</head>
<body>
  <div class="container">
    <h1>Add New Blog</h1>

    <?= form_open('blog/save'); ?>
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>

    <label for="content">Content:</label>
    <textarea name="content" rows="5" required></textarea>
    <br>

    <input type="submit" value="Save">
    <?= form_close(); ?>
  </div>

</body>
</html>