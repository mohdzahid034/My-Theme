<?php get_header(); ?>

<main class="front-page">
  <div class="hero-banner"> 
    <h1>Welcome to Globeinfo.in</h1>
    <p>Your ultimate source for the latest news and articles</p>
    <a href="<?php echo site_url('/blog'); ?>" class="btn">Today Blogs</a>
  </div>

  <section class="recent-posts">
    <h2>Latest Posts</h2>
    <div class="posts-grid">
      <div class="post">
    <?php
    $recent = new WP_Query(array('posts_per_page' => 6));
    if ($recent->have_posts()) :
      echo '<div class="posts-grid">';
      while ($recent->have_posts()) : $recent->the_post(); ?>
        <article class="card">
          <a href="<?php the_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) the_post_thumbnail('medium'); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
          </a>
        </article>
      <?php endwhile;
      echo '</div>';
      wp_reset_postdata();
    endif;
    ?>
    </div>
    </div>
  </section>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
