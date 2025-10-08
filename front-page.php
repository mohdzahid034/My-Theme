<?php get_header(); ?>

<main class="front-page">
  <h1>Zahid</h1>
  <section class="hero">
    <h1>Welcome to <?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </section>

  <section class="latest-posts">
    <h2>Latest News</h2>
    <?php
    $latest = new WP_Query(['posts_per_page' => 10]);
    if ($latest->have_posts()) {
      while ($latest->have_posts()) {
        $latest->the_post();
        ?>
        <article>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
        </article>
        <?php
      }
    }
    wp_reset_postdata();
    ?>
  </section>
</main>

<?php get_footer(); ?>

