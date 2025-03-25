<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RankMyChoice
 */

?>

	<footer id="colophon" class="site-footer bg-muted/50 border-t" aria-labelledby="footer-heading">
		<h2 id="footer-heading" class="sr-only"><?php esc_html_e( 'Footer', 'rankmychoice' ); ?></h2>
		
		<!-- Footer Widgets -->
		<div class="container py-10">
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="footer-widget-area">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="footer-widget-area">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="footer-widget-area">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
					<div class="footer-widget-area">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		
		<!-- Copyright -->
		<div class="border-t py-6">
			<div class="container flex flex-col md:flex-row justify-between items-center gap-4">
				<p class="text-sm text-muted-foreground">
					&copy; <?php echo date_i18n( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'rankmychoice' ); ?>
				</p>
				
				<?php
				if ( has_nav_menu( 'footer' ) ) :
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'container'      => false,
							'menu_class'     => 'flex gap-6',
							'depth'          => 1,
							'fallback_cb'    => false,
						)
					);
				endif;
				?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

