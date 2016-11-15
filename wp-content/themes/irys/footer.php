<footer id="footer" class="footer">
    <?php
    $args = array(
        'theme_location' => 'footer', // nom du slug
        'menu' => 'footer_fr', // nom à donner cette occurence du menu
        'menu_class' => 'menu_footer container', // class à attribuer au menu
        'menu_id' => 'fooyer_id' // id à attribuer au menu
    );
    wp_nav_menu($args);
    ?>
    <div class="footer_copyright">Irys programms - All Rights Reserved</div>
</footer>

<!-- Execution de la fonction wp_footer() obligatoire ! -->
<?php wp_footer(); ?>
</body>
</html>