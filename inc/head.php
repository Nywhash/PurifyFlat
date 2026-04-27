<?php
defined('DIR_ACCESS') or die(header('Location: ' . $cfg_mainurl));
include_once 'config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php if (isset($cfg_favicon) && !empty($cfg_favicon)): ?>
        <link rel="icon" href="<?php echo $cfg_favicon; ?>" type="image/x-icon" />
    <?php endif; ?>

    <title><?php echo isset($title) ? $title : $cfg_name; ?></title>

    <meta name="robots"
        content="<?php echo (!empty($cfg_robots) && $cfg_robots === true) ? 'index, follow' : 'noindex, nofollow'; ?>" />
    <meta name="description" content="<?php echo isset($desc) && !empty($desc) ? $desc : $cfg_name; ?>" />
    <meta name="theme-color" content="#d700ff" />
    <link rel="canonical" href="<?php echo isset($url) ? $url : $cfg_mainurl; ?>" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo isset($title) ? $title : $cfg_name; ?>" />
    <meta property="og:description" content="<?php echo isset($desc) && !empty($desc) ? $desc : $cfg_name; ?>" />
    <meta property="og:url" content="<?php echo isset($url) ? $url : $cfg_mainurl; ?>" />
    <meta property="og:site_name" content="<?php echo $cfg_name; ?>" />
    <meta property="og:image" content="<?php echo $cfg_logolink; ?>" />
    <meta property="og:image:secure_url" content="<?php echo $cfg_logolink; ?>" />
    <meta property="og:image:alt" content="<?php echo $cfg_name; ?> Logo" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $cfg_mainurl ?>/assets/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JavaScript -->
    <script src="<?= $cfg_mainurl ?>/assets/main.js" defer></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap"
        rel="stylesheet" />
</head>

<body>
