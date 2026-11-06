<?php
include_once __DIR__ . '/config.php';
if (!defined('DIR_ACCESS')) {
    header('Location: ' . $cfg_mainurl, true, 302);
    exit();
}
?>
<!-- Footer Start -->

<footer class="nf_site-footer">
    <div class="nf_container3">
        <div>
            <p>&copy; <?= date('Y') ?> <?= e($cfg_legalname) ?>. All rights reserved.</p>
        </div>
        <div>
            <p>Contact: <a
                    href="<?= e($cfg_support) ?>"><?= e(str_replace('mailto:', '', $cfg_support)) ?></a></p>
        </div>
    </div>
</footer>

<!-- Footer End -->

<?php if (!empty($cfg_googleanalytics)): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e(rawurlencode($cfg_googleanalytics)) ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', <?= json_encode($cfg_googleanalytics, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>);
    </script>
<?php endif; ?>
</body>

</html>

