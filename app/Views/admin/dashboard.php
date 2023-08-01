<!-- File: app/Views/admin/dashboard.php -->

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link rel="icon" href="https://alaf.co.tz/assets/uploads/favicon.ico" sizes="32x32" />
  <title>Admin Dahsboard</title>
</head>

<body>
  <div class="container">
    <h1>Welcome to the Admin Dashboard</h1>

    <a href="<?= site_url('admin/create'); ?>">Create New Blog Post</a>
    <br><br>

    <h2>All Blog Posts</h2>
    <table>
      <tr>
        <th>Title</th>
        <th>Actions</th>
      </tr>
      <?php foreach ($posts as $post): ?>
        <tr>
          <td>
            <?= $post['title']; ?>
          </td>
          <td>
            <a href="<?= site_url('admin/edit/' . $post['id']); ?>">Edit</a>
            <a href="<?= site_url('admin/delete/' . $post['id']); ?>"
              onclick="return confirm('Are you sure you want to delete this blog post?')">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>