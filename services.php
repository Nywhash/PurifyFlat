<?php

define('DIR_ACCESS', true);
include_once __DIR__ . '/inc/config.php';

$url = rtrim($cfg_mainurl, '/') . '/services';
$title = $cfg_name . " - Services";
$desc = "Explore the professional services and custom solutions offered by " . $cfg_name . ".";

include_once __DIR__ . '/inc/url.php';
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';
?>

<!-- Content Start -->
<main class="nf_main-content nf_container2">
    <section class="nf_hero">
        <h1>Our Services</h1>
        <p>Comprehensive, high-performance solutions designed to help your business grow and operate efficiently.</p>
        <a href="<?= e(rtrim($cfg_mainurl, '/')) ?>/contact" class="nf_btn-primary">Request a Quote</a>
    </section>

    <!-- Services Grid -->
    <section class="nf_features">
        <h2>What We Offer</h2>
        <div class="nf_feature-cards">
            <article class="nf_feature-card">
                <i class="fas fa-laptop-code fa-3x nf_feature-icon"></i>
                <h3>Web Development</h3>
                <p>Fast, responsive, and SEO-friendly websites engineered for performance and conversions.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-layer-group fa-3x nf_feature-icon"></i>
                <h3>UI / UX Design</h3>
                <p>Clean, intuitive user interfaces crafted to deliver a seamless experience across all devices.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-tachometer-alt fa-3x nf_feature-icon"></i>
                <h3>Performance Optimization</h3>
                <p>Speed audits, caching strategies, and code refinement to keep load times at a minimum.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-lock fa-3x nf_feature-icon"></i>
                <h3>Security Hardening</h3>
                <p>Proactive security reviews, server configuration, and best practices to protect your assets.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-search fa-3x nf_feature-icon"></i>
                <h3>Technical SEO</h3>
                <p>Structured metadata, clean URL architecture, and crawl optimization for better visibility.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-life-ring fa-3x nf_feature-icon"></i>
                <h3>Maintenance &amp; Support</h3>
                <p>Reliable ongoing updates, backups, and priority assistance whenever you need it.</p>
            </article>
        </div>
    </section>

    <!-- Process Section -->
    <section class="nf_why-us">
        <div class="nf_why-us-content">
            <div class="nf_why-us-text">
                <h2>How We Work</h2>
                <p>Our structured workflow keeps projects on schedule and ensures every detail aligns with your business objectives.</p>
                <ul class="nf_why-us-list">
                    <li>Discovery &amp; requirements planning</li>
                    <li>Architecture &amp; prototype design</li>
                    <li>Iterative development &amp; quality testing</li>
                    <li>Deployment &amp; post-launch support</li>
                </ul>
            </div>
            <div class="nf_why-us-image">
                 Tailored to Your Workflow
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <section class="nf_cta-box">
        <h2>Ready to Start Your Next Project?</h2>
        <p>Tell us about your goals and let’s build the right solution together.</p>
        <a href="<?= e(rtrim($cfg_mainurl, '/')) ?>/contact" class="nf_btn-primary">Contact Us</a>
    </section>
</main>
<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
