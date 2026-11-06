<?php
include_once __DIR__ . '/config.php';
if (!defined('DIR_ACCESS')) {
    header('Location: ' . $cfg_mainurl, true, 302);
    exit();
}

$current_page = basename($_SERVER['PHP_SELF'] ?? '');
$base_url = rtrim($cfg_mainurl, '/');
?>
<nav class="nf_navbar">
    <div class="nf_container">
        <a href="<?= e($base_url) ?>/" class="nf_logo">
            <img src="<?= e($cfg_logolink) ?>" alt="<?= e($cfg_name) ?> Logo" />
        </a>

        <ul class="nf_nav-links">
            <li><a href="<?= e($base_url) ?>/" class="<?= ($current_page === 'index.php') ? 'nf_active' : '' ?>">Home</a>
            </li>
            <li><a href="<?= e($base_url) ?>/about" class="<?= ($current_page === 'about.php') ? 'nf_active' : '' ?>">About</a>
            </li>
            <li><a href="<?= e($base_url) ?>/services"
                    class="<?= ($current_page === 'services.php') ? 'nf_active' : '' ?>">Services</a></li>
            <li><a href="<?= e($base_url) ?>/contact" class="<?= ($current_page === 'contact.php') ? 'nf_active' : '' ?>">Contact</a>
            </li>
        </ul>

        <button type="button" class="nf_menu-toggle" aria-label="Toggle menu" aria-expanded="false">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>
