<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part('footer-widget');?>
	<footer class="footer-section">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="footer-logo">
							<img src="<?php echo esc_attr(get_theme_mod('wp_bootstrap_starter_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
						</div>
					</div>
					<div class="col-md-2">
						<div class="theme-footer-widget">
							<h2>Restaurant</h2>

								<?php if (esc_attr(get_theme_mod('address'))) {
    ?> 	<p><i class="fa fa-map-marker"></i> <span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress"><?php echo esc_attr(get_theme_mod('address')); ?></span></p>
								<?php
}?>


<?php if (esc_attr(get_theme_mod('phone'))) {
    ?> <p><i class="fa fa-phone"></i> <span itemprop="telephone" dir="ltr"><?php echo esc_attr(get_theme_mod('phone')); ?></span></p>
								<?php
}?>

<?php if (esc_attr(get_theme_mod('mobile'))) {
    ?> <p><i class="fa fa-mobile"></i> <span itemprop="mobile" dir="ltr"><?php echo esc_attr(get_theme_mod('mobile')); ?></span></p>
								<?php
}?>

<?php if (esc_attr(get_theme_mod('email'))) {
    ?> <p><i class="fa fa-envelope"></i> <a itemprop="email" dir="ltr" href="<?php echo esc_attr(get_theme_mod('email')); ?>"><?php echo esc_attr(get_theme_mod('email')); ?></a></p>
								<?php
}?>



                            </div>
					</div>

					<div class="col-md-3">
							<div class="theme-footer-widget">
								<h2>About Us</h2>
								<?php if (esc_attr(get_theme_mod('about'))) {
    ?> <p><?php echo esc_attr(get_theme_mod('about')); ?></p>
																<?php
}?>
							</div>
					</div>

					<div class="col-md-2">
					<div class="theme-footer-widget">
								<h2>Opening Hours</h2>
								<?php if (esc_attr(get_theme_mod('opening-hours'))) {
    ?> <p><?php echo esc_attr(get_theme_mod('opening-hours')); ?> - <?php echo esc_attr(get_theme_mod('closing-hours')); ?></p>
																<?php
}?>
					</div>
					</div>

					<div class="col-md-3">

					<?php	get_template_part('template-parts/footer-blogs');?>

					</div>
				</div>
			</div>

	</footer>

	<div class="social-section">
					<div class="container">
						<p class="social-icons-row">
							<?php
if (esc_attr(get_theme_mod('facebook-link'))) {?>
							<a href="<?php echo esc_attr(get_theme_mod('facebook-link')); ?>"><i class="iconCircle fa fa-facebook"></i></a>
							<?php
}
?>

<?php
if (esc_attr(get_theme_mod('twitter-link'))) {?>
							<a href="<?php echo esc_attr(get_theme_mod('twitter-link')); ?>"><i class="iconCircle fa fa-twitter"></i></a>
							<?php
}
?>

<?php
if (esc_attr(get_theme_mod('google-link'))) {?>
							<a href="<?php echo esc_attr(get_theme_mod('google-link')); ?>"><i class="iconCircle fa fa-google-plus"></i></a>
							<?php
}
?>

<?php
if (esc_attr(get_theme_mod('pinterest-link'))) {?>
							<a href="<?php echo esc_attr(get_theme_mod('pinterest-link')); ?>"><i class="iconCircle fa fa-pinterest-p"></i></a>
							<?php
}
?>
						</p>

						<p>

						<?php
if (esc_attr(get_theme_mod('copyrights-text'))) {?>
							<p class="copyrights-text">&copy; <?php echo esc_attr(get_theme_mod('copyrights-text')); ?></p>
							<?php
}
?>

						</p>
					</div>
			</div>
<?php endif;?>
</div><!-- #page -->

<?php wp_footer();?>
</body>
</html>