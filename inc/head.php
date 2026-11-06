<?php
include_once __DIR__ . '/config.php';
if (!defined('DIR_ACCESS')) {
    header('Location: ' . $cfg_mainurl, true, 302);
    exit();
}

$page_title = isset($title) && $title !== '' ? $title : $cfg_name;
$page_desc = isset($desc) && $desc !== '' ? $desc : $cfg_name;
$page_url = isset($url) && $url !== '' ? $url : $cfg_mainurl;
$base_url = rtrim($cfg_mainurl, '/');
?>
<!DOCTYPE html>
<html lang="<?= e($cfg_lang ?? 'en') ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php if (!empty($cfg_favicon)): ?>
        <link rel="icon" href="<?= e($cfg_favicon) ?>" type="image/x-icon" />
    <?php endif; ?>

    <title><?= e($page_title) ?></title>

    <meta name="robots"
        content="<?= (!empty($cfg_robots) && $cfg_robots === true) ? 'index, follow' : 'noindex, nofollow' ?>" />
    <meta name="description" content="<?= e($page_desc) ?>" />
    <meta name="theme-color" content="#d700ff" />
    <link rel="canonical" href="<?= e($page_url) ?>" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= e($page_title) ?>" />
    <meta property="og:description" content="<?= e($page_desc) ?>" />
    <meta property="og:url" content="<?= e($page_url) ?>" />
    <meta property="og:site_name" content="<?= e($cfg_name) ?>" />
    <meta property="og:image" content="<?= e($cfg_logolink) ?>" />
    <meta property="og:image:secure_url" content="<?= e($cfg_logolink) ?>" />
    <meta property="og:image:alt" content="<?= e($cfg_name) ?> Logo" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= e($base_url) ?>/assets/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JavaScript -->
    <script src="<?= e($base_url) ?>/assets/main.js" defer></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
        rel="stylesheet" />
</head>

<body>

