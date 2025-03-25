<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RankMyChoice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col bg-background'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rankmychoice' ); ?></a>

	<header id="masthead" class="site-header border-b sticky top-0 z-50 bg-background">
		<!-- Top Bar -->
		<div class="bg-primary text-primary-foreground py-2">
			<div class="container flex justify-between items-center">
				<div class="text-sm flex items-center gap-4">
					<span><?php esc_html_e( 'Trending:', 'rankmychoice' ); ?></span>
					<?php
					// Get recent trending posts
					$trending_args = array(
						'posts_per_page' => 3,
						'meta_key' => 'post_views_count',
						'orderby' => 'meta_value_num',
						'order' => 'DESC',
					);
					$trending_query = new WP_Query( $trending_args );
					
					if ( $trending_query->have_posts() ) :
						$count = 0;
						while ( $trending_query->have_posts() ) : $trending_query->the_post();
							$count++;
							$classes = 'hover:underline';
							if ($count > 1) $classes .= ' hidden md:inline';
							if ($count > 2) $classes .= ' hidden lg:inline';
							?>
							<a href="<?php the_permalink(); ?>" class="<?php echo esc_attr($classes); ?>"><?php the_title(); ?></a>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
				
				<?php
				if ( has_nav_menu( 'social' ) ) :
					?>
					<div class="flex items-center gap-3">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'social',
								'menu_id'        => 'social-menu',
								'container'      => false,
								'menu_class'     => 'flex items-center gap-3',
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>',
								'fallback_cb'    => false,
							)
						);
						?>
					</div>
					<?php
				endif;
				?>
			</div>
		</div>
		
		<!-- Main Header -->
		<div class="container py-4">
			<div class="flex justify-between items-center">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title text-2xl md:text-3xl font-bold"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title text-2xl md:text-3xl font-bold"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$rankmychoice_description = get_bloginfo( 'description', 'display' );
					if ( $rankmychoice_description || is_customize_preview() ) :
						?>
						<p class="site-description sr-only"><?php echo $rankmychoice_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				
				<div class="hidden md:flex items-center gap-4">
					<div class="relative w-64">
						<?php get_search_form(); ?>
					</div>
					<a href="<?php echo esc_url( home_url( '/subscribe/' ) ); ?>" class="inline-flex h-9 items-center justify-center rounded-md border border-input bg-background px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50">
						<?php esc_html_e( 'Subscribe', 'rankmychoice' ); ?>
					</a>
				</div>
				
				<button id="mobile-menu-toggle" class="md:hidden inline-flex h-10 w-10 items-center justify-center rounded-md border border-input bg-background text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle menu', 'rankmychoice' ); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="menu-icon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="close-icon hidden"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
				</button>
			</div>
		</div>
		
		<!-- Navigation -->
		<nav id="site-navigation" class="main-navigation border-t hidden md:block" aria-label="<?php esc_attr_e( 'Main navigation', 'rankmychoice' ); ?>">
			<div class="container">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'menu_class'     => 'flex gap-1',
						'fallback_cb'    => false,
					)
				);
				?>
			</div>
		</nav><!-- #site-navigation -->
		
		<!-- Mobile Menu -->
		<div id="mobile-menu" class="md:hidden border-t hidden" role="navigation" aria-label="<?php esc_attr_e( 'Mobile navigation', 'rankmychoice' ); ?>">
			<div class="container py-4">
				<div class="mb-4">
					<?php get_search_form(); ?>
				</div>
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'mobile-menu-items',
						'container'      => false,
						'menu_class'     => 'space-y-2',
						'fallback_cb'    => false,
					)
				);
				?>
				
				<div class="mt-4 pt-4 border-t">
					<a href="<?php echo esc_url( home_url( '/subscribe/' ) ); ?>" class="inline-flex w-full h-10 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50">
						<?php esc_html_e( 'Subscribe', 'rankmychoice' ); ?>
					</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

