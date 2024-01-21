<!DOCTYPE html>
<html <?php language_attributes(); // display the html language tag ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-logo-bianco-varese.svg" type="image/svg">

  <script async type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"floatingPreferencesButtonDisplay":"anchored-center-left","perPurposeConsent":true,"siteId":3399517,"whitelabel":false,"cookiePolicyId":50518916,"lang":"it", "banner":{ "acceptButtonDisplay":true,"closeButtonRejects":true,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true }};
  </script>

  <script async type="text/javascript" src="https://cs.iubenda.com/autoblocking/3399517.js"></script>
  <script async type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>

  <?php wp_head();?>

</head>

<body <?php body_class();?>>

  <?php wp_body_open();?>

  <header class="header__container">

    <div class="header">

      <a href="<?php echo esc_url(home_url());?>" class="header__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/Na-Impianti-elettrici-fotovoltaico-videosorveglianza-logo-bianco-varese.svg" alt="<?php bloginfo('title');?>">
      </a>

      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'items_wrap' => '<ul class="header__menu">%3$s</ul>'
      ));
      ?>

      <div class="header__hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>

    </div>

  </header>

  <div class="overflow">