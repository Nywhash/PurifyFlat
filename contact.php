<?php

define('DIR_ACCESS', true);
include_once __DIR__ . '/inc/config.php';

$url = rtrim($cfg_mainurl, '/') . '/contact';
$title = $cfg_name . " - Contact";
$desc = "Get in touch with " . $cfg_name . " for inquiries, support, or project collaborations.";

include_once __DIR__ . '/inc/url.php';
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';

$support_display = str_replace('mailto:', '', $cfg_support);
?>

<!-- Content Start -->
<main class="nf_main-content nf_container2">
    <section class="nf_hero">
        <h1>Contact Us</h1>
        <p>Have a question or want to work together? Reach out to our team and we will get back to you promptly.</p>
        <a href="<?= e($cfg_support) ?>" class="nf_btn-primary">Email Us Directly</a>
    </section>

    <!-- Contact Section -->
    <section class="nf_contact-section">
        <div class="nf_contact-grid">
            <div class="nf_contact-info">
                <h2>Get in Touch</h2>
                <p>Fill out the form or contact us directly through our support channel. We typically respond within one business day.</p>

                <div class="nf_contact-cards">
                    <div class="nf_contact-card">
                        <i class="fas fa-envelope nf_contact-card-icon"></i>
                        <div>
                            <h3>Email &amp; Support</h3>
                            <p><a href="<?= e($cfg_support) ?>"><?= e($support_display) ?></a></p>
                        </div>
                    </div>
                    <div class="nf_contact-card">
                        <i class="fas fa-clock nf_contact-card-icon"></i>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Monday &ndash; Friday, 09:00 &ndash; 18:00</p>
                        </div>
                    </div>
                    <div class="nf_contact-card">
                        <i class="fas fa-building nf_contact-card-icon"></i>
                        <div>
                            <h3>Company</h3>
                            <p><?= e($cfg_legalname) ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nf_contact-form-wrap">
                <form class="nf_contact-form" action="<?= e($cfg_support) ?>" method="get" enctype="text/plain">
                    <div class="nf_form-group">
                        <label for="nf_name">Full Name</label>
                        <input type="text" id="nf_name" name="name" placeholder="Your name" required />
                    </div>
                    <div class="nf_form-group">
                        <label for="nf_email">Email Address</label>
                        <input type="email" id="nf_email" name="email" placeholder="you@example.com" required />
                    </div>
                    <div class="nf_form-group">
                        <label for="nf_subject">Subject</label>
                        <input type="text" id="nf_subject" name="subject" placeholder="How can we help?" required />
                    </div>
                    <div class="nf_form-group">
                        <label for="nf_message">Message</label>
                        <textarea id="nf_message" name="body" rows="5" placeholder="Tell us about your project or question..." required></textarea>
                    </div>
                    <button type="submit" class="nf_btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</main>
<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
