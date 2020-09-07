<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>cafe</title>
  <link href="http://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="bg-slider ">
    <header class="top-header wrapper">
      <h1 class="header-logo">CHA cafe</h1>
      <nav class="header-nav flex">
        <li><a href="<?php echo 
                get_post_type_archive_link( 'news' ); ?>" >News</a></li>
        <li><a href="">Cncept</a></li>
        <li><a href="">Menu</a></li>
        <li><a href="">Access</a></li>
      </nav>
    </header>

    <h1 class="bg-slider__title">A CAFE WITH GOOD FOOD</h1>
  </div>
  <!-- hambager-->
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <nav class="globalMenuSp">
      <ul>
        <li><a href="#">News</a></li>
        <li><a href="#">Cncept</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Access</a></li>
      </ul>
    </nav>