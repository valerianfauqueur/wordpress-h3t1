<?php
/**
 * Template Name: actions récentes
 */
?>
<?php get_header(); //appel du template header.php  ?>
<!--Hero section-->
<header class="actions" style="background-image: url('<?= the_post_thumbnail_url('') ?>')">
    <div class="header__background"></div>
    <div class="container">
        <div class="header__titles">
            <h1><?php the_field('hero_baseline'); ?></h1>
            <h2><?php the_field('hero_baseline2'); ?></h2>
            <div class="btn"><a
                    href="<?php the_field('hero_button_link'); ?>"><?php the_field('button_hero_text'); ?></a></div>
        </div>
    </div>
</header>
<main>
    <div class="container">

        <section class="region">
            <h3 class="region__title"><?php the_field('hero_description_titre'); ?></h3>
            <p class="region__txt"><?php the_field('hero_description'); ?></p>
        </section>
    
        <div class="events">
            <?php
            // The Query
            $args = array('post_type' => "actions");
            $the_query = new WP_Query($args);
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <article class="article">
                        <div class="article__infos">
                            <h4 class="article__title"><?php the_title() ?></h4>
                            <p class="article__txt"><?php the_field('action_texte') ?></p>
                            <p class="social">
                                <a href="<?php the_field('social_link_1') ?>">
                                    <span class="<?php the_field('social_icon_1') ?>"></span>
                                </a>
                                <a href="<?php the_field('social_link_2') ?>">
                                    <span class="<?php the_field('social_icon_2') ?>"></span>
                                </a>
                            </p>
                        </div>
                        <div class="article__img">
                            <img src="<?php the_field('action_img') ?>" alt="<?php the_title() ?>"/>
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
        </div>

        <article class="nextEvents">
            <?php
            // The Query
            $args = array('post_type' => "agenda");
            $the_query = new WP_Query($args);
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
                    <article class="nextEvent">
                        <p class="nextEvent__date"><?php the_title() ?></p>
                        <p class="nextEvent__txt"><?php the_field('agenda_texte') ?></p>
                    </article>
                    <?php
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }
            ?>


            <!--lien section-->
            <article class="envies">
                <h3 class="envies__title"><?php the_field('lien_titre'); ?></h3>
                <p class="envies__txt"><?php the_field('lien_description'); ?></p>
                <div class="envies__btn">
                    <a href="<?php the_field('lien_bouton_url'); ?>"><?php the_field('lien_bouton'); ?></a>
                </div>
            </article>
            <article class="travel">
                <h4 class="travel__title"><?php the_field('lien_titre_2'); ?></h4>
                <p class="travel__txt"><?php the_field('lien_description_2'); ?></p>
                <div class="travel__btn">
                    <a href="<?php the_field('lien_bouton_url_2'); ?>"><?php the_field('lien_bouton_2'); ?></a>
                </div>
            </article>
        </article>
    </div>

</main>
<?php get_footer(); //appel du template header.php
?>
