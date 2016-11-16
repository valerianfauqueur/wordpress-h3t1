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
        <p class="social">
            <a> <?php the_field('twitter_link') ?>
                <div class="<?php the_field('twitter_icon') ?>"></div>
            </a>
            <a> <?php the_field('facebook_link') ?>
                <div> lass="<?php the_field('facebook_icon') ?>"></div>
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