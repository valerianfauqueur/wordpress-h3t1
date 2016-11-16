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
            <a href="<?php the_field('twitter_link') ?>">
                <span class="<?php the_field('twitter_font_awesome') ?>"></span>
            </a>
            <a href="<?php the_field('facebook_link') ?>">
                <span class="<?php the_field('facebook_font_awesome') ?>"></span>
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