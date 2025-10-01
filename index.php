<?php get_header(); ?>

<main>
    <!-- Navbar -->
    <div id="navbar">
        <div class="logo">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Globe Now.png" alt="Logo"></a>
        </div>
        <div class="menu">
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo home_url('/latest'); ?>">Latest</a></li>
            <li><a href="<?php echo home_url('/categories'); ?>">Categories</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            <li><a href="<?php echo home_url('/about-us'); ?>">About Us</a></li>
        </div>
    </div>

    

    <!-- WordPress loop for posts/pages -->
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="content"><?php the_content(); ?></div>
            </article>
        <?php endwhile;
    else : ?>
        <p>No content found.</p>
    <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


