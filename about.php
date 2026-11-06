<?php

define('DIR_ACCESS', true);
include_once __DIR__ . '/inc/config.php';

$url = rtrim($cfg_mainurl, '/') . '/about';
$title = $cfg_name . " - About";
$desc = "Welcome to " . $cfg_name . ", your trusted partner in innovative business solutions.";

include_once __DIR__ . '/inc/url.php';
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';
?>

<!-- Content Start -->
<main class="nf_main-content nf_container2">
    <section class="nf_hero">
        <h1>About <?= e($cfg_name) ?></h1>
        <p>We help organizations build fast, reliable, and scalable digital experiences with a focus on simplicity and long-term value.</p>
        <a href="<?= e(rtrim($cfg_mainurl, '/')) ?>/contact" class="nf_btn-primary">Get in Touch</a>
    </section>

    <!-- Stats Section -->
    <section class="nf_stats">
        <div class="nf_stat-card">
            <span class="nf_stat-number">10+</span>
            <span class="nf_stat-label">Years of Experience</span>
        </div>
        <div class="nf_stat-card">
            <span class="nf_stat-number">250+</span>
            <span class="nf_stat-label">Projects Delivered</span>
        </div>
        <div class="nf_stat-card">
            <span class="nf_stat-number">99%</span>
            <span class="nf_stat-label">Client Satisfaction</span>
        </div>
        <div class="nf_stat-card">
            <span class="nf_stat-number">24/7</span>
            <span class="nf_stat-label">Dedicated Support</span>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="nf_why-us">
        <div class="nf_why-us-content">
            <div class="nf_why-us-text">
                <h2>Our Story &amp; Mission</h2>
                <p><?= e($cfg_name) ?> was founded with a straightforward goal: to remove unnecessary complexity and deliver practical solutions that perform reliably every day.</p>
                <p>We combine technical expertise with clear communication so our clients can focus on growing their business while we handle the rest.</p>
                <ul class="nf_why-us-list">
                    <li>Transparent process from start to finish</li>
                    <li>Performance and security built in by default</li>
                    <li>Long-term partnership mindset</li>
                    <li>Clean, maintainable architecture</li>
                </ul>
            </div>
            <div class="nf_why-us-image">
                Built for Reliability
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="nf_features">
        <h2>Our Core Values</h2>
        <div class="nf_feature-cards">
            <article class="nf_feature-card">
                <i class="fas fa-bolt fa-3x nf_feature-icon"></i>
                <h3>Simplicity First</h3>
                <p>We focus on clean, lean solutions that solve real problems without unnecessary bloat.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-handshake fa-3x nf_feature-icon"></i>
                <h3>Transparency</h3>
                <p>Clear timelines, honest communication, and predictable outcomes on every project.</p>
            </article>
            <article class="nf_feature-card">
                <i class="fas fa-chart-line fa-3x nf_feature-icon"></i>
                <h3>Continuous Growth</h3>
                <p>We constantly refine our tools and processes to keep your business ahead of the curve.</p>
            </article>
        </div>
    </section>
</main>
<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
