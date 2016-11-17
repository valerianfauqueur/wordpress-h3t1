<?php
/**
*Template Name: biographie
*/
?>

<?php get_header(); //appel du template header.php  ?>


    <header class="programme" style="background-image: url('<?= the_post_thumbnail_url('') ?>')">
      <div class="header__background"></div>
      <div class="container">
        <div class="header__titles">
          <h1><?= the_field('page_title') ?></h1>
        </div>
      </div>
    </header>

    <section>
      <div class="container">
        <p class="intro"><?= the_field('page_intro') ?></p>
      </div>
    </section>

    <section>
        <?php
            // The Query
            $args = array('post_type' => "biographie");
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>


                    <article class="caractereArticle">
                        <div class="container">

                            <div class="caractereArticle__img">
                                <img src="<?= the_post_thumbnail_url('thumbnail_bio') ?>">
                            </div>
                            <div class="caractereArticle__infos">
                                <h3 class="caractereArticle__title"><?php the_title(); ?></h3>
                                <p class="caractereArticle__txt"><?php the_content(); ?></p>

                                <?php
                                $terms = wp_get_post_terms(get_the_ID(),'categorie-lifestyle', array("fields" => "all"));
                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                                    foreach ( $terms as $term ):
                                ?>
                                    <div class="tag"><a><?= $term->name ?></a></div>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                      </article>

                    <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
        ?>
    </section>

<?php get_template_part('additionnal-info'); ?>
<?php get_footer(); //appel du template header.php  ?>
