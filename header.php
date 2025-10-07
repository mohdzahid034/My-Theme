<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="navbar">
    <div class="logo">
      <a href="<?php echo get_template_directory_uri(); ?>front-page.php">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Globe Now.png" alt="Site Logo">
      </a>
    </div>

    <nav class="navigation">
      <ul>
        <li><a href="C:\Users\use\Desktop\My-Theme\home.php">Home</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Latest</a></li>
        <li><a href="#">Sport</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <div class="menu-icon" id="menu-icon">☰</div>
    </nav>
  </div>
</header>