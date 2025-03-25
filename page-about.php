<?php
/**
 * Template Name: About Page
 *
 * @package RankMyChoice
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="bg-muted/30 py-16 md:py-24">
        <div class="container">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-6"><?php the_title(); ?></h1>
                <p class="text-lg text-muted-foreground mb-8">
                    <?php echo get_theme_mod('about_subtitle', 'Your go-to source for rankings, reviews, and insights on everything from cars to movies, anime to travel destinations.'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12">
        <div class="container">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-2xl font-bold mb-4"><?php echo esc_html__('Our Story', 'rankmychoice'); ?></h2>
                    <div class="prose max-w-none">
                        <p>RankMyChoice was founded in 2023 with a simple mission: to provide honest, thorough, and helpful rankings and reviews across a wide range of categories.</p>
                        <p>What started as a small blog has grown into a comprehensive resource for people looking to make informed decisions about products, services, and entertainment options.</p>
                        <p>Our team of dedicated experts researches, tests, and evaluates everything we cover to ensure our readers get the most accurate and up-to-date information possible.</p>
                    </div>
                </div>
                <div class="relative aspect-video rounded-lg overflow-hidden">
                    <?php 
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large', array('class' => 'object-cover w-full h-full'));
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/about-image.jpg" alt="About RankMyChoice" class="object-cover w-full h-full">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-12 bg-muted/30">
        <div class="container">
            <h2 class="text-2xl font-bold mb-8 text-center"><?php echo esc_html__('Our Values', 'rankmychoice'); ?></h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-background p-6 rounded-lg border">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php echo esc_html__('Integrity', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">We maintain the highest standards of honesty and transparency in all our reviews and rankings.</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php echo esc_html__('Quality', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">We're committed to providing thoroughly researched, well-written, and valuable content.</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php echo esc_html__('Community', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">We value our readers' input and strive to build a community of informed consumers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-12">
        <div class="container">
            <h2 class="text-2xl font-bold mb-8 text-center"><?php echo esc_html__('Meet Our Team', 'rankmychoice'); ?></h2>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-1.jpg" alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="text-lg font-bold"><?php echo esc_html__('John Doe', 'rankmychoice'); ?></h3>
                    <p class="text-sm text-muted-foreground"><?php echo esc_html__('Founder & Editor-in-Chief', 'rankmychoice'); ?></p>
                </div>
                
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-2.jpg" alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="text-lg font-bold"><?php echo esc_html__('Jane Smith', 'rankmychoice'); ?></h3>
                    <p class="text-sm text-muted-foreground"><?php echo esc_html__('Automotive Editor', 'rankmychoice'); ?></p>
                </div>
                
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-3.jpg" alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="text-lg font-bold"><?php echo esc_html__('Michael Johnson', 'rankmychoice'); ?></h3>
                    <p class="text-sm text-muted-foreground"><?php echo esc_html__('Entertainment Editor', 'rankmychoice'); ?></p>
                </div>
                
                <div class="text-center">
                    <div class="relative w-32 h-32 mx-auto rounded-full overflow-hidden mb-4">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-4.jpg" alt="Team Member" class="object-cover w-full h-full">
                    </div>
                    <h3 class="text-lg font-bold"><?php echo esc_html__('Sarah Williams', 'rankmychoice'); ?></h3>
                    <p class="text-sm text-muted-foreground"><?php echo esc_html__('Travel Editor', 'rankmychoice'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-12 bg-primary text-primary-foreground">
        <div class="container">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl font-bold mb-4"><?php echo esc_html__('Join Our Community', 'rankmychoice'); ?></h2>
                <p class="mb-6">Subscribe to our newsletter to receive the latest rankings, reviews, and insights directly in your inbox.</p>
                <a href="<?php echo esc_url(home_url('/subscribe/')); ?>" class="inline-flex h-10 items-center justify-center rounded-md bg-background text-foreground px-8 py-2 text-sm font-medium shadow transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring">
                    <?php echo esc_html__('Subscribe Now', 'rankmychoice'); ?>
                </a>
            </div>
        </div>
    </section>

    <?php
    // Additional content from the page editor
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();

