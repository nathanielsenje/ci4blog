<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <link rel="icon" href="https://alaf.co.tz/assets/uploads/favicon.ico" sizes="32x32" />
  <title>ALAF Blog</title>
</head>
<body>
  <div class="container">
    <h1>Blog Posts</h1>

    <?php if (!empty($posts)): ?>
      <div>
        <?php foreach ($posts as $post): ?>
          <div>
            <h3><a href="<?= site_url('blog/view/' . $post['id']); ?>"><?= $post['title']; ?></a></h3>
            <p>
              <?= $post['content']; ?>
            </p>
          </div>
          <hr />
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </div>
</body>

</html>