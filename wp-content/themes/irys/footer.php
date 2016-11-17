<footer>
    <div class="container">
        <nav>
            <?php
            $args = array(
                'theme_location' => 'footer', // nom du slug
                'menu' => 'footer_fr', // nom à donner cette occurence du menu
                'menu_class' => 'menu_footer container', // class à attribuer au menu
                'menu_id' => 'footer_id' // id à attribuer au menu
            );
            wp_nav_menu($args);
            ?>
        </nav>
        <p class="social">
            <a href="<?php the_field('social_link_footer', 'Options') ?>">
                <span class="<?php the_field('social_icon_footer', 'Options') ?>"></span>
            </a>
            <a href="<?php the_field('social_link_footer_2', 'Options') ?>">
                <span class="<?php the_field('social_icon_footer_2', 'Options') ?>"></span>
            </a>
        </p>
        <div class="legal">
            <p>Programme Irys - All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- Execution de la fonction wp_footer() obligatoire ! -->
<?php wp_footer(); ?>
</body>
</html>