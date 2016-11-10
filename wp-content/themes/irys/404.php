<?php get_header(); ?>
    <section>
        <div class="error__header_text_error_section">
            <h1 class="error__title">Erreur 404</h1>

            <p class="error_main_description">Oups, ceci est une erreur dite 404 ! En termes simples, la page ne peut
                être trouvée... Je vous
                invite dès à présent à utiliser les outils de recherche et / ou de navigation pour parvenir au
                contenu souhaité.
            </p>
        </div>
        <div class="error__post_suggest">

            <!--suggest page to user-->
            <?php
            $args = array(
                'post_type' => 'page',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post(); ?>
                    <div class="error_suggest_page_3col">
                        <a href="<?php the_permalink() ?>">
                            <img src=<?php the_post_thumbnail(); ?> alt="<?php the_title(); ?>">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </a>

                    </div>
                    <?php
                }
            }
            ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
<?php get_footer(); ?>