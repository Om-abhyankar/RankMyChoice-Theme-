<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RankMyChoice
 */

get_header();
?>

	<main id="primary" class="site-main container py-10">
		<section class="error-404 not-found text-center max-w-2xl mx-auto py-16">
			<header class="page-header mb-8">
				<h1 class="page-title text-4xl font-bold mb-4"><?php esc_html_e( 'Oops!', 'rankmychoice' ); ?></h1>
				<p class="text-xl text-muted-foreground"><?php esc_html_e( 'Page Not Found!', 'rankmychoice' ); ?></p>
			</header><!-- .page-header -->

			<div class="page-content">
				<p class="mb-8 text-muted-foreground"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search or check out some of our popular content below.', 'rankmychoice' ); ?></p>

				<div class="search-form-container max-w-md mx-auto mb-10">
					<?php get_search_form(); ?>
				</div>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring">
					<?php esc_html_e( 'BACK TO HOMEPAGE', 'rankmychoice' ); ?>
				</a>

				<div class="mt-16">
					<h2 class="text-xl font-bold mb-6"><?php esc_html_e( 'Popular Posts', 'rankmychoice' ); ?></h2>
					
					<div class="grid gap-6 md:grid-cols-2">
						<?php
						$popular_posts = new WP_Query(
							array(
								'posts_per_page' => 4,
								'meta_key'       => 'post_views_count',
								'orderby'        => 'meta_value_num',
								'order'          => 'DESC',
							)
						);

						if ( $popular_posts->have_posts() ) :
							while ( $popular_posts->have_posts() ) :
								$popular_posts->the_post();
								?>
								<article class="border rounded-lg overflow-hidden">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?>" class="block relative aspect-video overflow-hidden">
											<?php the_post_thumbnail( 'rankmychoice-thumbnail', array( 'class' => 'object-cover w-full h-full' ) ); ?>
										</a>
									<?php endif; ?>
									<div class="p-4">
										<h3 class="font-bold mb-2"><a href="<?php the_permalink(); ?>" class="hover:text-primary"><?php the_title(); ?></a></h3>
										<div class="text-sm text-muted-foreground"><?php echo get_the_date(); ?></div>
									</div>
								</article>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</div>
				</div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->

<?php
get_footer();

