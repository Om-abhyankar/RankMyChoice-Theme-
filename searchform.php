<?php
/**
 * Custom search form
 *
 * @package RankMyChoice
 */
?>

<form role="search" method="get" class="search-form relative" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="sr-only"><?php echo esc_html_x( 'Search for:', 'label', 'rankmychoice' ); ?></label>
	<input type="search" class="search-field w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring pr-8" 
		placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'rankmychoice' ); ?>" 
		value="<?php echo get_search_query(); ?>" 
		name="s" 
		aria-label="<?php echo esc_attr_x( 'Search website', 'aria-label', 'rankmychoice' ); ?>" />
	<button type="submit" class="search-submit absolute right-0 top-0 h-full px-3 bg-transparent border-none text-muted-foreground" aria-label="<?php echo esc_attr_x( 'Submit search', 'submit button', 'rankmychoice' ); ?>">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
	</button>
</form>

