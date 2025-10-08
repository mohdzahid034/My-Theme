<?php get_header(); ?>

<main class="single-post">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <div class="meta">Published: <?php the_date(); ?> by <?php the_author(); ?></div>
        <?php if ( has_post_thumbnail() ) the_post_thumbnail('large'); ?>
        <div class="content"><?php the_content(); ?></div>
      </article>

      <?php comments_template(); ?>

    <?php endwhile;
  endif;
  ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
