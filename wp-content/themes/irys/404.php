<?php get_header(); ?>
    <section>
        <header></header>
        <div class="error__text_error_section">
            <h1 class="error__title">Erreur 404</h1>
            <p class="error_main_description">Oups, ceci est une erreur dite 404 ! En termes simples, la page ne peut
                être trouvée... Je vous
                invite dès à présent à utiliser les outils de recherche et / ou de navigation pour parvenir au
                contenu souhaité.
            </p>
            <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'article',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    the_title();
                    the_content();
                    the_post_thumbnail();
                }
            }

            wp_reset_postdata(); ?>

    </section>
<?php get_footer(); ?>