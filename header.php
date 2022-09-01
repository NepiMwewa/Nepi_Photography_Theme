<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

  <header class="header-content">
    <div class="logo">
      <?php if( has_custom_logo() ):  ?>
          <?php
              // Get Custom Logo URL
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              $custom_logo_url = $custom_logo_data[0];
          ?>

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
             title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
             rel="home">

              <img src="<?php echo esc_url( $custom_logo_url ); ?>"
                   alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

          </a>
      <?php else: ?>
          <div class="site-name"><?php bloginfo( 'name' ); ?></div>
      <?php endif; ?>
    </div>

    <h1><?php bloginfo('name'); ?></h1>
    <h4><?php bloginfo('description'); ?></h4>

    <nav class="site-nav">
      <?php
        $args = array(
          'theme_location' => 'primary'
        );
      ?>

      <?php wp_nav_menu($args); ?>
    </nav>

  </header>
