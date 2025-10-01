<?php get_header(); ?>

<main>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <div class="post-meta">
            Posted on <?php the_date(); ?> by <?php the_author(); ?>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        <?php
    }
}
?>
</main>

<?php get_footer(); ?>
