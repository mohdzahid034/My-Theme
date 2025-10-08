<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/functions.js">
</head>
<body <?php body_class(); ?>>
<header>
  <nav class="navbar">

    <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo2.png" alt="Site Logo"></div>
    <div class="menu" id="menu">
      <div class="menu-links">
        <a href="#">Home</a>
        <a href="#">India</a>
        <a href="#">World</a>
        <a href="#">Sports</a>
        
        <a href="#">Space</a>
        <a href="#">Business</a>
        <a href="#">Technology</a>
      </div>
      <div class="separator">
        <a class="contact" href="#"><i class="fa fa-phone"></i>Contact</a><br>
        <a class="about" href="#"><i class="fa fa-info-circle"></i>About</a>
      </div>
    </div>
    <div class="menu-icon" id="menu-icon">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </nav>

  <div class="bmenubar"><a href="#">India</a>
        <a href="#">World</a>
        <a href="#">Sports</a>
        <a href="#">Space</a>
        <a href="#">Business</a>
        <a href="#">Technology</a></div>
<?php global $template; echo '<!-- Template: ' . basename($template) . ' -->'; ?>

</header>