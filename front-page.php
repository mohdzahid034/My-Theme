<?php get_header(); ?>

<main class="front-page">
  <h1>Zahid</h1>
  <?php
  // show the static page content if this front page is a page
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
  endif;
  ?>

  <section class="recent-posts">
    <h2>Latest Posts</h2>
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
  </section>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
