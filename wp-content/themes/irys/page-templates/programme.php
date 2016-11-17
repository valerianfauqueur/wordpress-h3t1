<?php

/*
Template Name: programme
*/

get_header(); //appel du template header.php  ?>


    <header class="programme" style="background-image: url('<?= the_post_thumbnail_url('') ?>')">
      <div class="header__background"></div>
      <div class="container">
        <div class="header__titles">
            <h1><?php the_title(); ?></h1>
            <h3><?php the_field("sous_titre"); ?></h3>
            <p><?php the_field("description"); ?></p>
        </div>
      </div>
    </header>
    <section>

        <?php
            // The Query
            $args = array('post_type' => "programme");
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                $loopNumber = 0;
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $loopNumber++;
                    ?>

                    <article class="programmeArticle">
                        <div class="container">
                          <div class="title__container"> 
                            <h3 class="programmeArticle__title"><?php the_title(); ?></h3>
                            <p class="number"><?php echo $loopNumber; ?></p>
                          </div>
                          <p class="programmeArticle__txt"><?php the_content(); ?></p>
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
