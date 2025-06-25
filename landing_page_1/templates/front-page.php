<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>

<div class="hero">
    <div class="container">
        <h1>Welcome to Our Company</h1>
        <p>We build beautiful, powerful websites that convert visitors into customers.</p>
        <a href="#about" class="cta-button">Learn More</a>
    </div>
</div>

<section id="about" class="section about">
    <div class="container">
        <img src="https://source.unsplash.com/600x400/?teamwork" alt="About Us">
        <div class="about-text">
            <h2>About Us</h2>
            <p>Our team of experts is dedicated to delivering high-quality digital solutions tailored to your business needs. Whether it's branding, web development, or marketing, we've got you covered.</p>
        </div>
    </div>
</section>

<section id="features" class="section features">
    <div class="container">
        <h2>Our Features</h2>
        <p>Check out some of the great features we offer.</p>
        <div class="features-grid">
            <div class="feature-box">
                <h3>Responsive Design</h3>
                <p>Looks great on all devices, from phones to desktops.</p>
            </div>
            <div class="feature-box">
                <h3>Fast & Secure</h3>
                <p>Optimized performance and built-in security features.</p>
            </div>
            <div class="feature-box">
                <h3>Easy to Customize</h3>
                <p>Fully editable through the WordPress block editor.</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="section testimonials">
    <div class="container">
        <h2>What Clients Say</h2>
        <blockquote class="testimonial">
            "This is the best theme I've ever used. So clean and easy to customize!"
        </blockquote>
        <p class="author">— Jane Doe, CEO</p>
    </div>
</section>

<section id="contact" class="section contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions? Fill out the form below and we'll get back to you shortly.</p>
        <?php echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]'); // Replace with actual CF7 ID ?>
    </div>
</section>

<?php get_footer(); ?>