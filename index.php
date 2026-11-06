<?php

define('DIR_ACCESS', true); // allow access for guests

// include the configuration file
include_once __DIR__ . '/inc/config.php';

$url = rtrim($cfg_mainurl, '/') . '/'; // Example: /about (Empty for the homepage)

// Set the title and description for the homepage
$title = $cfg_name . " - Homepage";
$desc = "Welcome to " . $cfg_name . ", your trusted partner in innovative business solutions.";

// include the URL processing file
include_once __DIR__ . '/inc/url.php';

// include the head and navbar parts of the site
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';

?>

<!-- Content Start -->
<main class="nf_main-content nf_container2">
    <section class="nf_hero">
        <h1>Welcome to <?= e($cfg_name) ?></h1>
        <p><?= e($cfg_name) ?> provides reliable and efficient solutions tailored for your business needs.</p>
        <a href="<?= e(rtrim($cfg_mainurl, '/')) ?>/about" class="nf_btn-primary">Learn More</a>
    </section>

    <!-- Features Section -->
    <section class="nf_features">
        <h2>Why Choose <?= e($cfg_name) ?>?</h2>
        <div class="nf_feature-cards">
            <article class="nf_feature-card">
                <i class="fas fa-shield-alt fa-3x nf_feature-icon"></i>
                <h3>Trusted Expertise</h3>
                <p>Years of experience delivering high-quality results across various industries.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-cogs fa-3x nf_feature-icon"></i>
                <h3>Custom Solutions</h3>
                <p>We tailor our services to meet the unique requirements of your business.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-headset fa-3x nf_feature-icon"></i>
                <h3>24/7 Support</h3>
                <p>Our team is always ready to assist you with any questions or issues.</p>
            </article>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="nf_why-us">
        <div class="nf_why-us-content">
            <div class="nf_why-us-text">
                <h2>Why Work With Us?</h2>
                <p>We are committed to delivering exceptional service and results. Our team of experts works closely
                    with you to understand your goals and provide solutions that drive success.</p>
                <ul class="nf_why-us-list">
                    <li>Proven track record of success</li>
                    <li>Dedicated project managers</li>
                    <li>Competitive pricing</li>
                    <li>Continuous improvement</li>
                </ul>
            </div>
            <div class="nf_why-us-image">
                Your Success Story
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="nf_faq">
        <h2>Frequently Asked Questions</h2>
        <div class="nf_faq-list">
            <div class="nf_faq-item">
                <div class="nf_faq-question">How quickly can we get started?</div>
                <div class="nf_faq-answer">Most projects kick off within 2 to 3 business days after the initial consultation and scope agreement.</div>
            </div>
            <div class="nf_faq-item">
                <div class="nf_faq-question">Do you offer custom packages for small businesses?</div>
                <div class="nf_faq-answer">Yes, all of our solutions are tailored to match your current stage, goals, and budget requirements.</div>
            </div>
            <div class="nf_faq-item">
                <div class="nf_faq-question">What kind of ongoing support is included?</div>
                <div class="nf_faq-answer">We provide dedicated technical support, regular maintenance updates, and performance monitoring.</div>
            </div>
            <div class="nf_faq-item">
                <div class="nf_faq-question">Can I upgrade or change my plan later?</div>
                <div class="nf_faq-answer">Absolutely. You can scale your services up or adjust your plan at any time as your business grows.</div>
            </div>
        </div>
    </section>
</main>
<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
