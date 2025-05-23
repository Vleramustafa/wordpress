<footer class="site-footer">
    <div class="container">
        <div class="copyright">

        </div>
        <div class="footer-menu">
            <?php
                wp_nav_menu(array('theme_location'=>'wp_devs_footer_menu','depth'=>1));
            ?>
        </div>
    </div>
    <?php wp_footer();?>
</footer>

</body>
</html>