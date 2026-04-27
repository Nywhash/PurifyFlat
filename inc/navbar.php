<?php
defined('DIR_ACCESS') or die(header('Location: ' . $cfg_mainurl));

$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="nf_navbar">
    <div class="nf_container">
        <a href="<?php echo $cfg_mainurl; ?>" class="nf_logo">
            <img src="<?php echo $cfg_logolink; ?>" alt="<?php echo $cfg_name; ?> Logo" />
        </a>

        <ul class="nf_nav-links">
            <li><a href="index" class="<?php echo ($current_page == 'index.php') ? 'nf_active' : ''; ?>">Home</a>
            </li>
            <li><a href="about" class="<?php echo ($current_page == 'about.php') ? 'nf_active' : ''; ?>">About</a>
            </li>
            <li><a href="services"
                    class="<?php echo ($current_page == 'services.php') ? 'nf_active' : ''; ?>">Services</a></li>
            <li><a href="contact" class="<?php echo ($current_page == 'contact.php') ? 'nf_active' : ''; ?>">Contact</a>
            </li>
        </ul>

        <button class="nf_menu-toggle" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.querySelector('.nf_menu-toggle');
        const navLinks = document.querySelector('.nf_nav-links');

        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', function () {
                navLinks.classList.toggle('nf_mobile-active');
            });
        }
    });
</script>