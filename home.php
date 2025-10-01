<?php get_header(); ?>

<main>
<h1>Blog</h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <?php
    }
} else {
    echo '<p>No posts found.</p>';
}
?>
</main>

<?php get_footer(); ?>
