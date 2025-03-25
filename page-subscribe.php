<?php
/**
 * Template Name: Subscribe Page
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
                <p class="text-lg text-muted-foreground">
                    <?php echo get_theme_mod('subscribe_subtitle', 'Join our community and get the latest rankings, reviews, and insights delivered straight to your inbox.'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Subscription Form Section -->
    <section class="py-12">
        <div class="container">
            <div class="max-w-2xl mx-auto bg-background p-8 rounded-lg border">
                <h2 class="text-2xl font-bold mb-6 text-center"><?php echo esc_html__('Subscribe to Our Newsletter', 'rankmychoice'); ?></h2>
                
                <p class="text-muted-foreground mb-8 text-center">
                    Stay updated with our latest articles, exclusive content, and special offers. We promise not to spam your inbox!
                </p>
                
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-1"><?php echo esc_html__('Full Name', 'rankmychoice'); ?></label>
                        <input type="text" id="name" name="name" class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" placeholder="John Doe" required>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium mb-1"><?php echo esc_html__('Email Address', 'rankmychoice'); ?></label>
                        <input type="email" id="email" name="email" class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" placeholder="john@example.com" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2"><?php echo esc_html__('Interests (Select all that apply)', 'rankmychoice'); ?></label>
                        <div class="grid md:grid-cols-2 gap-2">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="interests[]" value="automotive" class="rounded border-input">
                                <span><?php echo esc_html__('Automotive', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="interests[]" value="movies" class="rounded border-input">
                                <span><?php echo esc_html__('Movies & TV', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="interests[]" value="anime" class="rounded border-input">
                                <span><?php echo esc_html__('Anime', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="interests[]" value="technology" class="rounded border-input">
                                <span><?php echo esc_html__('Technology', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="interests[]" value="travel" class="rounded border-input">
                                <span><?php echo esc_html__('Travel', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="interests[]" value="gaming" class="rounded border-input">
                                <span><?php echo esc_html__('Gaming', 'rankmychoice'); ?></span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2"><?php echo esc_html__('Email Frequency', 'rankmychoice'); ?></label>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2">
                                <input type="radio" name="frequency" value="daily" class="rounded-full border-input">
                                <span><?php echo esc_html__('Daily Digest', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="frequency" value="weekly" class="rounded-full border-input" checked>
                                <span><?php echo esc_html__('Weekly Roundup', 'rankmychoice'); ?></span>
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="radio" name="frequency" value="monthly" class="rounded-full border-input">
                                <span><?php echo esc_html__('Monthly Newsletter', 'rankmychoice'); ?></span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="pt-2">
                        <label class="flex items-start gap-2">
                            <input type="checkbox" name="terms" class="rounded border-input mt-1" required>
                            <span class="text-sm text-muted-foreground">
                                <?php echo sprintf(
                                    esc_html__('I agree to the %1$sTerms of Service%2$s and %3$sPrivacy Policy%4$s', 'rankmychoice'),
                                    '<a href="#" class="text-primary hover:underline">',
                                    '</a>',
                                    '<a href="#" class="text-primary hover:underline">',
                                    '</a>'
                                ); ?>
                            </span>
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full inline-flex h-10 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring">
                        <?php echo esc_html__('Subscribe Now', 'rankmychoice'); ?>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-12 bg-muted/30">
        <div class="container">
            <h2 class="text-2xl font-bold mb-8 text-center"><?php echo esc_html__('Why Subscribe?', 'rankmychoice'); ?></h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-background p-6 rounded-lg border text-center">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z"></path><path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php echo esc_html__('Exclusive Content', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">Get access to subscriber-only articles, in-depth reviews, and special features not available on our website.</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border text-center">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php echo esc_html__('Early Access', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">Be the first to know about new rankings, reviews, and insights before they're published on our website.</p>
                </div>
                
                <div class="bg-background p-6 rounded-lg border text-center">
                    <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M20 6H10m0 0H4m6 0V3m4 14h6m0 0h-6m0 0v3M4 10h16M4 14h3"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2"><?php echo esc_html__('Special Offers', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">Enjoy exclusive discounts and promotions from our partners on products and services we review.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-12">
        <div class="container">
            <h2 class="text-2xl font-bold mb-8 text-center"><?php echo esc_html__('What Our Subscribers Say', 'rankmychoice'); ?></h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-background p-6 rounded-lg border">
                    <div class="flex gap-2 text-primary mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <p class="text-muted-foreground mb-4">"The weekly newsletter has become my go-to resource for honest reviews. I've saved so much money by avoiding overhyped products and discovering hidden gems!"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-muted"></div>
                        <div>
                            <h4 class="font-bold">Michael R.</h4>
                            <p class="text-sm text-muted-foreground">Subscriber since 2022</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-background p-6 rounded-lg border">
                    <div class="flex gap-2 text-primary mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <p class="text-muted-foreground mb-4">"I love the exclusive content! The in-depth reviews have helped me make better purchasing decisions, especially for tech products. Totally worth subscribing!"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-muted"></div>
                        <div>
                            <h4 class="font-bold">Sarah T.</h4>
                            <p class="text-sm text-muted-foreground">Subscriber since 2023</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-background p-6 rounded-lg border">
                    <div class="flex gap-2 text-primary mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <p class="text-muted-foreground mb-4">"As a movie buff, I rely on RankMyChoice for honest film reviews. Their newsletter always gives me a heads-up on what's worth watching. Highly recommend!"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-muted"></div>
                        <div>
                            <h4 class="font-bold">David L.</h4>
                            <p class="text-sm text-muted-foreground">Subscriber since 2021</p>
                        </div>
                    </div>
                </div>
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

