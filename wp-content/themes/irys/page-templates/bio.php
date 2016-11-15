<?php
/**
*Template Name: biographie
*/
?>

<?php get_header(); //appel du template header.php  ?>

<header class="bio__intro">
    <img class="bio__intro__bgimg" src="<?= the_field('page_img') ?>">
    <h1 class="bio__intro__title"><?= the_field('page_title') ?></h1>
    <p class="bio__intro__description"><?= the_field('page_intro') ?><p>
</header>

<section class="bio__posts">
    <?php
        // The Query
        $args = array('post_type' => "biographie");
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>

                <article class="bio__part">
                    <?php if(has_post_thumbnail()) ?>
                    <img src="<?= the_post_thumbnail_url('thumbnail_bio') ?>">
                    <h3 class="bio__part__title"><?php the_title(); ?></h3>
                    <p class="bio__part__content"><?php the_content(); ?></p>
                    <ul class="bio__part__tags">
                        <?php
                        $terms = wp_get_post_terms(get_the_ID(),'categorie-lifestyle', array("fields" => "all"));
                        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
                            foreach ( $terms as $term ):
                        ?>
                            <li>
                                <a href='#' title='<?= $term->name ?>' data-id='<?= $term->term_id ?>' >
                                    <?= $term->name ?>
                                </a>
                            </li>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
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

<?php get_footer(); //appel du template header.php  ?>
