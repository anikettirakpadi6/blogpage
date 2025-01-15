<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/include/header.php') ?>
<?php require_once( ROOT_PATH . '/include/functions.php') ?>
<?php require_once( ROOT_PATH . '/include/reg_login.php') ?>
<?php $posts = getPublishedPosts(); ?>
<title>BLOG</title>
</head>
<body>
  <!-- <h1 class="title">My Blog</h1> -->
  <div class="container">
  <?php include( ROOT_PATH . '/include/navbar.php') ?>
  <?php include( ROOT_PATH . '/include/banner.php') ?>
    <div class="content">
      <h2 class="content-title">Recent Articles</h2>
      <hr>
      <?php foreach ($posts as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post-image" alt="">
          <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
            <div class="post-info">
              <h3><?php echo $post['title'] ?></h3>
              <div class="info">
                <span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
                <span class="read-more">Read more...</span>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
    <?php include( ROOT_PATH . '/include/footer.php') ?>
  </div>
</body>
</html>