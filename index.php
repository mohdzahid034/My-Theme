<?php get_header(); ?>

<main>
  <div id="navbar">
    <div class="logo">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Globe Now.png"></a>
    </div>
    <div class="menu">
      <li><a href="#">Home</a></li>
      <li><a href="#">Latest</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">About Us</a></li>
    </div>
  </div>

  <?php
  if (have_posts()) {
      while (have_posts()) {
          the_post();
          ?>
          <h1><?php the_title(); ?></h1>
          <div class="content">
              <?php the_content(); ?>
          </div>
          <?php
      }
  }
  ?>
</main>

<?php get_footer(); ?>