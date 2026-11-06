<?php

if (!defined('DIR_ACCESS')) {
    define('DIR_ACCESS', true);
}
include_once __DIR__ . '/inc/config.php';

if (!headers_sent()) {
    http_response_code(404);
}

$url = rtrim($cfg_mainurl, '/') . '/404';
$title = $cfg_name . " - 404 Not Found";
$desc = "The page you are looking for could not be found.";

include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';
?>

<!-- Content Start -->
<main class="nf_main-content nf_container2">
    <section class="nf_hero">
        <h1>404 &ndash; Page Not Found</h1>
        <p>The page you are looking for might have been moved, renamed, or no longer exists.</p>
        <a href="<?= e(rtrim($cfg_mainurl, '/')) ?>/" class="nf_btn-primary">Back to Homepage</a>
    </section>
</main>
<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
