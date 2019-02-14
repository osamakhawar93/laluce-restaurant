<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
   <!-- navbar-static-top fixed-top -->
   <div class="top-header-small">
        <div class="container">
            <div class="col-md-6">

            <?php if (esc_attr(get_theme_mod('phone'))) {
    ?> <span class="info-header"><i class="fa fa-phone"></i> <span><?php echo esc_attr(get_theme_mod('phone')); ?></span></span>
								<?php
            }?>

<?php if (esc_attr(get_theme_mod('email'))) {
    ?> <span class="info-header"><i class="fa fa-envelope"></i> <span><?php echo esc_attr(get_theme_mod('email')); ?></span></span>
								<?php
            }?>
         
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div> 

	<header  class="site-header  custom-ok-nav <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
   
    <div class="container">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                      
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-between align-items-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav mx-auto text-center',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
  
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>