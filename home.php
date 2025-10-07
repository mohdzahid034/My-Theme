<?php
    $latest = new WP_Query(['posts_per_page' => 3]);
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