<?php
defined('DIR_ACCESS') or die(header('Location: ' . (isset($cfg_mainurl) ? $cfg_mainurl : '/')));
include_once 'config.php';

// prevent host header manipulation
$allowed_host = parse_url($cfg_mainurl, PHP_URL_HOST);
$request_host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : (isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : $allowed_host);

if ($allowed_host && $request_host !== $allowed_host) {
    $request_host = $allowed_host;
}

$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$path = parse_url($request_uri, PHP_URL_PATH);

$fix_path = preg_replace('#/\.+/#', '/', $path);
$fix_path = preg_replace('#//+#', '/', $fix_path);

// if path ends with .php or .html
if (preg_match('/\.(php|html)$/i', $fix_path)) {
    $new_path = preg_replace('/\.(php|html)$/i', '', $fix_path);

    if ($new_path === '' || $new_path === null) {
        $new_path = '/';
    }

    $scheme = parse_url($cfg_mainurl, PHP_URL_SCHEME) ?: 'https';
    $base_host = parse_url($cfg_mainurl, PHP_URL_HOST) ?: $request_host;
    $port = parse_url($cfg_mainurl, PHP_URL_PORT);
    $base = $scheme . '://' . $base_host . ($port ? ':' . $port : '');

    $redirect_to = $new_path;

    if (!headers_sent()) {
        header("Location: " . $redirect_to, true);
        exit();
    } else {
        // fallback
        echo '<meta http-equiv="refresh" content="0;url=' . htmlspecialchars($redirect_to, ENT_QUOTES, 'UTF-8') . '">';
        echo '<script>location.replace(' . json_encode($redirect_to) . ');</script>';
        exit();
    }
}
