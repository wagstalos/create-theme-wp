<footer>
    <div class="container">
        <div class="row">
        <div class="copyright col-sm-3 text-center">
                <?php 
                    if(is_active_sidebar('social-media')){
                        dynamic_sidebar('social-media');
                    }
                ?>
            </div>

            <div class="copyright col-sm-6 text-center">
                <p> <?php echo get_theme_mod('set_copyright'); ?> </p>
            </div>
            
            <nav class="footer-menu col-sm-3  text-center">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_menu'
                        )
                    )
                ?>
            </nav>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>