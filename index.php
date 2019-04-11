<?php include('config/config.php') ?>
<?php include 'library/Database.php'; ?>
<?php include 'includes/header.php'; ?>
<?php
  $con = new Database();
?>
<div class="blog-post">
  <h2 class="blog-post-title">International PHP Conferance 2018</h2>
  <p class="blog-post-meta">January 1, 2018 by <a href="#">Asish</a></p>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  <a href="post.php?id=1" class="readmore">Read More</a>
</div><!-- /.blog-post -->

<div class="blog-post">
  <h2 class="blog-post-title">PHP 7.1.25 Released.</h2>
  <p class="blog-post-meta">December 23, 2017 by <a href="#">Abhisekh</a></p>

  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  <a href="post.php?id=1" class="readmore">Read More</a>
</div><!-- /.blog-post -->

<div class="blog-post">
  <h2 class="blog-post-title">New feature in PHP7</h2>
  <p class="blog-post-meta">December 14, 2017 by <a href="#">Chris</a></p>

 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
 <a href="post.php?id=1" class="readmore">Read More</a>
</div><!-- /.blog-post -->

<?php  include 'includes/footer.php'; ?>

