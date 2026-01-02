# PurifyFlat - Flat-File Static Website Kit for PHP

PurifyFlat is a minimalist, PHP-based, flat-file static website kit designed for building fast, simple, and maintainable websites without any database.
It provides a CMS-like structure using only files, making it ideal for corporate, landing, and front-end websites.

---

## 🚀 Features
- **No Database** – Uses a simple flat-file PHP structure (no MySQL, Maria or SQLite required).  
- **Easy Configuration** – Fully managed through a single `config.php` file.  
- **Customizable** – Effortlessly add or edit sections such as Home, About, Services, or Contact.  
- **Lightweight & Fast** – Minimal dependencies, optimized for quick deployment.

---

## ⚙️ Requirements
- PHP 7.4 or higher recommended
- Any web server with PHP support (Apache, Nginx, LiteSpeed, etc.)
- Basic understanding of HTML, CSS, and PHP
- No database required

---

## 🧩 Installation
1. **Download or clone** this repository.  
2. **Upload** the files to your hosting or local server.  
3. **Configure** your website via `/inc/config.php`.  
4. Done — your site is live!

---

## 📄 Creating a New Page
PurifyFlat uses simple PHP files as pages.
Each page follows the same structure and shares common layout components.

Example: Creating a `partners` page.


1. Create a new file named `partners.php` in your project root.  
2. Paste the following content:

```php
<?php

define('DIR_ACCESS', true); // Allow access for visitors

// Include the main configuration
include_once __DIR__ . '/inc/config.php';

// Set up basic page variables
$url = rtrim($cfg_mainurl, '/') . '/partners';
$title = $cfg_name . " - Partners";
$desc = "Partners page description";

// Include URL handler and layout components
include_once __DIR__ . '/inc/url.php';
include_once __DIR__ . '/inc/head.php';
include_once __DIR__ . '/inc/navbar.php';

?>
<!-- Content Start -->

<!-- HTML CONTENT GOES HERE -->

<!-- Content End -->

<?php include_once __DIR__ . '/inc/footer.php'; ?>
```

## 🎨 Theme Development

PurifyFlat does not enforce a strict theme system.  
Instead, it provides a **layout-based structure** that allows you to customize or replace core UI components such as the navbar, footer, and page layouts.

Themes are created by **editing or overriding layout files** inside the `/inc/` directory.

---

### 📌 Core Layout Files
The following files control the global layout and can be customized for theming purposes:

- `/inc/head.php` – `<head>` section, meta tags, CSS includes  
- `/inc/navbar.php` – Main navigation bar  
- `/inc/footer.php` – Footer layout  
- `/assets/` – CSS, JS, images, icons

To create a custom theme, simply modify these files or duplicate them into a new theme structure if desired.

© 2025 Nywhash, Ltd.  
Released under the MIT License.
