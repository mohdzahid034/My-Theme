<?php get_header(); ?>

<main>
<h1>
<?php
if (is_category()) {
    single_cat_title();
} elseif (is_tag()) {
    single_tag_title();
} elseif (is_author()) {
    the_post();
    echo 'Author: ' . get_the_author();
    rewind_posts();
} else {
    echo 'Archives';
}
?>
</h1>

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
