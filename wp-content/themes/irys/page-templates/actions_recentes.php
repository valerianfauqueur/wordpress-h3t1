<?php
/**
 * Template Name: actions récentes
 */
?>
<?php get_header(); //appel du template header.php  ?>
<!--Hero section-->
<?php if (get_field('hero_img')): ?>
    <img class="actions_recentes__hero-img" src="<?php the_field('hero_img'); ?>"/>
<?php endif; ?>

<p class="actions_recentes__hero-baseline"><?php the_field('hero_baseline'); ?></p>
<a class="actions_recentes__hero-button" type="button" href="<?php the_field('hero_button_link'); ?>"><?php the_field('button_hero_text'); ?></a>
<h2 class="actions_recentes__hero-description-title"><?php the_field('hero_description_titre'); ?></h2>
<p class="actions_recentes__hero-description-text"><?php the_field('hero_description'); ?></p>

<!--evenement section-->
<?php if (get_field('evenement_image')): ?>
    <img class="actions_recentes__evenement-img" src="<?php the_field('evenement_image'); ?>"/>
<?php endif; ?>

<h3 class="actions_recentes__evenement-title"><?php the_field('evenement_titre'); ?></h3>
<p class="actions_recentes__evenement-texte"><?php the_field('evenement_texte'); ?></p>

<!--evenement section 2-->
<?php if (get_field('evenement_image_2')): ?>
    <img class="actions_recentes__evenement-img" src="<?php the_field('evenement_image_2'); ?>"/>
<?php endif; ?>

<h3 class="actions_recentes__evenement-title"><?php the_field('evenement_titre_2'); ?></h3>
<p class="actions_recentes__evenement-texte"><?php the_field('evenement_texte_2'); ?></p>

<!--evenement section 3:-->
<?php if (get_field('evenement_image_3')): ?>
    <img class="actions_recentes__evenement-img" src="<?php the_field('evenement_image_3'); ?>"/>
<?php endif; ?>

<h3 class="actions_recentes__evenement-title"><?php the_field('evenement_titre_3'); ?></h3>
<p class="actions_recentes__evenement-texte"><?php the_field('evenement_texte_3'); ?></p>

<!--agenda section-->
<h4 class="actions_recentes__agenda_date"><?php the_field('agenda_date'); ?></h4>
<p class="actions_recentes__agenda_texte"><?php the_field('agenda_texte'); ?></p>

<h4 class="actions_recentes__agenda_date"><?php the_field('agenda_date_2'); ?></h4>
<p class="actions_recentes__agenda_texte"><?php the_field('agenda_texte_2'); ?></p>

<h4 class="actions_recentes__agenda_date"><?php the_field('agenda_date_3'); ?></h4>
<p class="actions_recentes__agenda_texte"><?php the_field('agenda_texte_3'); ?></p>

<h4 class="actions_recentes__agenda_date"><?php the_field('agenda_date_4'); ?></h4>
<p class="actions_recentes__agenda_texte"><?php the_field('agenda_texte_4'); ?></p>

<h4 class="actions_recentes__agenda_date"><?php the_field('agenda_date_5'); ?></h4>
<p class="actions_recentes__agenda_texte"><?php the_field('agenda_texte_5'); ?></p>



<?php get_footer(); //appel du template header.php  ?>
