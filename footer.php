        <footer class="site-footer container">
            <hr>

            <div class="footer-container">
                <?php
                    $args = array(
                        'theme_location' => 'menu_principal',
                        'container' => 'nav',
                        'container_class' => 'main-menu'
                    );

                    wp_nav_menu($args);
                ?>

                <p class="copyright">Todos ls derechos reservados <?php echo get_bloginfo('name') . " " . date('Y');?> </p>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>