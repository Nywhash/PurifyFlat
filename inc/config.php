<?php
// Main site URL (including https and www if applicable)
$cfg_mainurl = 'https://www.example.com'; // Example: https://www.example.com

defined('DIR_ACCESS') or die(header('Location: ' . $cfg_mainurl));

error_reporting(E_ALL);
ini_set('display_errors', 0); // 0: Production (no errors shown), 1: Debug mode (show all errors)

// Should the site be crawled by search engines?
$cfg_robots = true; // true = allow indexing, false = disallow

// Your domain name (without www and https, just the domain)
$cfg_domain = 'example.com'; // Example: example.com

// Logo link (URL to your logo image)
$cfg_logolink = 'https://www.example.com/logo.png'; // Example: https://www.example.com/logo.png
$cfg_favicon = 'https://www.example.com/favicon.ico'; // Example: https://www.example.com/favicon.ico

// Support link (can be an email address or a support URL)
$cfg_support = 'mailto:support@example.com'; // Example: mailto:support@example.com or https://example.com/support

// Site or theme name
$cfg_name = 'Example'; // Example: My Website

// Company’s legal name
$cfg_legalname = 'Example, Inc.'; // Example: My Company, Inc.

// Google Analytics ID (e.g., G-XXXXXXXXXX)
$cfg_googleanalytics = ''; // Example: G-1234567890
