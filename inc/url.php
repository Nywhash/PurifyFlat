<?php
include_once __DIR__ . '/config.php';
if (!defined('DIR_ACCESS')) {
    header('Location: ' . $cfg_mainurl, true, 302);
    exit();
}

$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($request_uri, PHP_URL_PATH);
if (!is_string($path) || $path === '') {
    $path = '/';
}

$fix_path = preg_replace('#/\.+/#', '/', $path);
$fix_path = preg_replace('#//+#', '/', $fix_path);

// if path ends with .php or .html
if (preg_match('/\.(php|html)$/i', $fix_path)) {
    $new_path = preg_replace('/\.(php|html)$/i', '', $fix_path);

    if ($new_path === '' || $new_path === null || $new_path === '/index') {
        $new_path = '/';
    }

    $new_path = '/' . ltrim($new_path, '/');

    $query = parse_url($request_uri, PHP_URL_QUERY);
    $redirect_to = $new_path . ($query ? '?' . $query : '');

    if (!headers_sent()) {
        header('Location: ' . $redirect_to, true, 301);
        exit();
    } else {
        // fallback
        echo '<meta http-equiv="refresh" content="0;url=' . e($redirect_to) . '">';
        echo '<script>location.replace(' . json_encode($redirect_to, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . ');</script>';
        exit();
    }
}

