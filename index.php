<?php get_header(); ?>

<main>
    <h1>index</h1>
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
  } else {
    echo "<p>No content found.</p>";
  }
  ?>
</main>

<?php get_footer(); ?>
