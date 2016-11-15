<footer>
    <div class="container">
        <nav>
            <?php
            $args = array(
                'theme_location' => 'footer', // nom du slug
                'menu' => 'footer_fr', // nom à donner cette occurence du menu
                'menu_class' => 'menu_footer container', // class à attribuer au menu
                'menu_id' => 'fooyer_id' // id à attribuer au menu
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <div class="social">
            <div class="social__facebook">
                <p><a>Lien Facebook</a></p>
            </div>
            <div class="social__twitter">
                <p><a>Lien Twitter</a></p>
            </div>
        </div>
        <div class="legal">
            <p>Irys programms - All Rights Reserved</p>
        </div>
    </div>
</footer>

<!-- Execution de la fonction wp_footer() obligatoire ! -->
<?php wp_footer(); ?>
</body>
</html>