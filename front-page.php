<?php get_header(); ?>

<main>
  <!-- Navbar can remain in header.php, keep homepage sections here -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to Globe Now</h1>
      <p>Your hero text here.</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Globe Now.png" alt="Logo">
    </div>
  </section>

  <section class="services">
    <div class="container">
      <h2>Our Services</h2>
      <p>Short description of services.</p>
      <!-- Example service items -->
      <div class="service-list">
        <div class="service-item">Service 1</div>
        <div class="service-item">Service 2</div>
        <div class="service-item">Service 3</div>
      </div>
    </div>
  </section>

  <section class="recent-posts">
    <div class="container">
      <h2>Latest Posts</h2>
      <?php
      $recent = new WP_Query(array('posts_per_page' => 5));
      if ($recent->have_posts()) :
        while ($recent->have_posts()) : $recent->the_post(); ?>
          <article>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No recent posts found.</p>
      <?php endif; ?>
    </div>
  </section>

  <section class="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <!-- Replace with your actual form shortcode -->
      <?php echo do_shortcode(); ?>
    </div>
  </section>
  <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
        <?php
    }
}
?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
