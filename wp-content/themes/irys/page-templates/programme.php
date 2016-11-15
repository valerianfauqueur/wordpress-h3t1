<?php

/*
Template Name: programme
*/

get_header(); //appel du template header.php  ?>


<section class="container-programme">

        <div class="full_img">
            <h1><?php the_title(); ?></h1>
            <h3><?php the_field("sous_titre"); ?></h3>
            <p><?php the_field("description"); ?></p>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile; endif; ?>

        <?php
            // The Query
            $args = array('post_type' => "programme");
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>

                    <div class="chapitre">
                        <h4 class=""><?php the_title(); ?></h4>
                        <p class=""><?php the_content(); ?></p>
                    </div>

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
