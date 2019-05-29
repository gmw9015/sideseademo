<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header" role="banner">

    <div class="top-bar-container" data-sticky-container>
      <div class="sticky sticky-topbar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
        <div class="top-bar">
          <div class="top-bar-left">
        
            <p class="logo"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></p>

            <nav class="nav-main-wrap" role="navigation">
                <?php h5bs_primary_nav(); ?>
            </nav>

          </div>
          <div class="top-bar-right">
            <a href="#" class="button">Donate</a>
            <a href="#" class="button secondary">Contact</a>
          </div>

          <nav class="nav-mobile-wrap" role="navigation">
              <i id="nav-mobile-toggle" class="nav-mobile-toggle fa fa-bars"></i>
              <?php h5bs_mobile_nav(); ?>
          </nav>

          

        </div>
      </div>
    </div>


</header>
