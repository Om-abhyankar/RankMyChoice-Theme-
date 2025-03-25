<?php
/**
 * Template Name: Contact Page
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
                    <?php echo get_theme_mod('contact_subtitle', 'Have questions or feedback? We\'d love to hear from you!'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12">
        <div class="container">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl font-bold mb-6"><?php echo esc_html__('Get In Touch', 'rankmychoice'); ?></h2>
                    <p class="text-muted-foreground mb-8">
                        Fill out the form below and our team will get back to you as soon as possible. We value your feedback and are here to answer any questions you may have.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold"><?php echo esc_html__('Phone', 'rankmychoice'); ?></h3>
                                <p class="text-muted-foreground">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold"><?php echo esc_html__('Email', 'rankmychoice'); ?></h3>
                                <p class="text-muted-foreground">contact@rankmychoice.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <h3 class="font-bold"><?php echo esc_html__('Address', 'rankmychoice'); ?></h3>
                                <p class="text-muted-foreground">123 Review Street, Suite 456<br>New York, NY 10001</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h3 class="text-xl font-bold mb-4"><?php echo esc_html__('Follow Us', 'rankmychoice'); ?></h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-primary text-primary-foreground flex items-center justify-center hover:opacity-90" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-primary text-primary-foreground flex items-center justify-center hover:opacity-90" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-primary text-primary-foreground flex items-center justify-center hover:opacity-90" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-primary text-primary-foreground flex items-center justify-center hover:opacity-90" aria-label="YouTube">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="bg-background p-6 rounded-lg border">
                    <h2 class="text-xl font-bold mb-6"><?php echo esc_html__('Send Us a Message', 'rankmychoice'); ?></h2>
                    
                    <form class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-sm font-medium mb-1"><?php echo esc_html__('Name', 'rankmychoice'); ?></label>
                                <input type="text" id="name" name="name" class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium mb-1"><?php echo esc_html__('Email', 'rankmychoice'); ?></label>
                                <input type="email" id="email" name="email" class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" required>
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium mb-1"><?php echo esc_html__('Subject', 'rankmychoice'); ?></label>
                            <input type="text" id="subject" name="subject" class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" required>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium mb-1"><?php echo esc_html__('Message', 'rankmychoice'); ?></label>
                            <textarea id="message" name="message" rows="5" class="w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring" required></textarea>
                        </div>
                        
                        <button type="submit" class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring">
                            <?php echo esc_html__('Send Message', 'rankmychoice'); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-12 bg-muted/30">
        <div class="container">
            <h2 class="text-2xl font-bold mb-6 text-center"><?php echo esc_html__('Find Us', 'rankmychoice'); ?></h2>
            <div class="aspect-[16/9] rounded-lg overflow-hidden">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.11976397304605!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1647043435496!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-12">
        <div class="container">
            <h2 class="text-2xl font-bold mb-8 text-center"><?php echo esc_html__('Frequently Asked Questions', 'rankmychoice'); ?></h2>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <div class="bg-background p-4 rounded-lg border">
                    <h3 class="text-lg font-bold mb-2"><?php echo esc_html__('How can I submit a product for review?', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">You can submit products for review by filling out our contact form with details about the product. Our editorial team will review your submission and get back to you if we're interested in reviewing it.</p>
                </div>
                
                <div class="bg-background p-4 rounded-lg border">
                    <h3 class="text-lg font-bold mb-2"><?php echo esc_html__('How do you determine your rankings?', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">Our rankings are based on thorough research, hands-on testing, and expert analysis. We consider factors like performance, value, design, and user experience. Our methodology varies by category and is always disclosed in our reviews.</p>
                </div>
                
                <div class="bg-background p-4 rounded-lg border">
                    <h3 class="text-lg font-bold mb-2"><?php echo esc_html__('Can I write for RankMyChoice?', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">Yes! We're always looking for knowledgeable contributors. Please send your resume, writing samples, and areas of expertise through our contact form, and our editorial team will review your application.</p>
                </div>
                
                <div class="bg-background p-4 rounded-lg border">
                    <h3 class="text-lg font-bold mb-2"><?php echo esc_html__('How can I advertise on your site?', 'rankmychoice'); ?></h3>
                    <p class="text-muted-foreground">For advertising inquiries, please contact our advertising team at advertising@rankmychoice.com with details about your company and advertising goals. We offer various advertising options to suit different needs and budgets.</p>
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

