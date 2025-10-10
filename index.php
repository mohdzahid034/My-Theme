<?php get_header(); ?>

<main class="site-main">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="excerpt"><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile;
    the_posts_pagination();
  else :
    echo '<p>No posts found.</p>';
  endif;
  ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
