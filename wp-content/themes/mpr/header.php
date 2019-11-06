<!DOCTYPE html>
<html lang="lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>">
<meta name="keywords" content="clinica dental , otordoncia, dental, clinica">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php wp_title('|', true, 'right'); ?></title>

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/icomoon/style.css">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/images/logo/images1.png" rel="icon" type="image/png">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

  <?php wp_head(); ?>
</head>

<body  data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div class="site-wrap">

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<div class="top-bar bg-light" id="home-section">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-6 text-left">
        <ul class="social-media">
          <li><a href="https://www.facebook.com/mprmuebleria/" class=""><span
                class="icon-facebook"></span></a></li>
          <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
          <li><a href="#" class=""><span class="icon-instagram"></span></a></li>

        </ul>
      </div>
      <div class="col-6">
        <p class="mb-0 float-right">
          <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2"
                style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+56)
                9 9477 0144</span></a></span>
          <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span
                class="d-none d-lg-inline-block text-black">infomprmuebles@gmail.com</span></a></span>
        </p>

      </div>
    </div>
  </div>
</div>

<header class="site-navbar  bg-general js-sticky-header site-navbar-target" role="banner">

  <div class="container">
    <div class="row align-items-center">

      <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0"><img width="99%"
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt=""></a></h1>
      </div>
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
            <li><a href="<?php bloginfo('url') ?>/" class="nav-link">Inicio</a></li>
            <li><a href="#products-section" class="nav-link">Productos</a></li>
            <li><a href="#about-section" class="nav-link">Sobre nosotros</a></li>
            <li><a href="#testimonials-section" class="nav-link">Testimonios</a></li>
            <li><a href="<?php bloginfo('url') ?>/index.php/tienda/" class="nav-link">Tienda</a></li>
            <li><a href="#contact-section" class="nav-link">Contact</a></li>
          </ul>
        </nav>
      </div>


      <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
          class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
      </div>

    </div>
  </div>

</header>
