<?php 

/*
Template Name: programme
*/

get_header(); //appel du template header.php  ?>


<section class="container programme">
        <header>
            <h1><?php the_title(); ?></h1>
        </header>

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
                
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text"><?php the_content(); ?></p>

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
