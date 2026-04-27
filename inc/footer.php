<?php
defined('DIR_ACCESS') or die(header('Location: ' . $cfg_mainurl));
include_once 'config.php';
?>
<!-- Footer Start -->

<footer class="nf_site-footer">
    <div class="nf_container3">
        <div>
            <p>&copy; <?php echo date('Y'); ?> <?php echo $cfg_legalname; ?>. All rights reserved.</p>
        </div>
        <div>
            <p>Contact: <a
                    href="<?php echo $cfg_support; ?>"><?php echo str_replace('mailto:', '', $cfg_support); ?></a></p>
        </div>
    </div>
</footer>

<!-- Footer End -->

<?php
// Google Analytics Integration
if (isset($cfg_googleanalytics) && !empty($cfg_googleanalytics)) {
    echo "
    <!-- Google tag (gtag.js) -->
    <script async src='https://www.googletagmanager.com/gtag/js?id={$cfg_googleanalytics}'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '{$cfg_googleanalytics}');
    </script>
    ";
}
?>
</body>

</html>
