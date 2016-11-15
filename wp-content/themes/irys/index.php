<?php get_header(); //appel du template header.php  ?>


    <header>
      <div class="header__background"></div>
      <div class="container">
        <div class="header__titles">
          <h1><?php the_title(); ?></h1>
          <h2>
            <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content(); endwhile; endif; ?>   
          </h2>
        </div>
      </div>
    </header>
    <main>
      <section>
        <div class="container">
          <article class="who">
            <h3 class="who__title"><?php the_field("titre_1"); ?></h3>
            <p class="who__txt"><?php the_field("description_1"); ?></p>
            <div class="who__btn"><a href="<?php the_field("bouton_lien_1"); ?>"><?php the_field("bouton_texte_1"); ?></a></div>
          </article>
          <article class="actions">
            <h3 class="actions__title"><?php the_field("titre_2"); ?></h3>
            <p class="actions__txt"><?php the_field("description_1"); ?></p>
            <div class="actions__btn"><a href="<?php the_field("bouton_lien_2"); ?>"><?php the_field("bouton_texte_2"); ?></a></div>
          </article>
        </div>
      </section>
      <section>
        <div class="container">
          <article class="goals">
            <h3 class="goals__title"><?php the_field("titre_3"); ?></h3>
            <p class="goals__txt"><?php the_field("description_1"); ?></p>
            <div class="goals__btn"><a href="<?php the_field("bouton_lien_3"); ?>"><?php the_field("bouton_texte_3"); ?></a></div>
          </article>
          <article class="programm">
            <div class="programm__item">
              <p><a>icon</a></p>
            </div>
            <div class="programm__item">
              <p><a>icon</a></p>
            </div>
            <div class="programm__item">
              <p><a>icon</a></p>
            </div>
            <div class="programm__item">
              <p><a>icon</a></p>
            </div>
            <div class="programm__item">
              <p><a>icon</a></p>
            </div>
            <div class="programm__item">
              <p><a>icon</a></p>
            </div>
          </article>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="form">
            <form>
              <h3 class="form__title">Contactez IRYS</h3>              
              <?php echo do_shortcode( '[contact-form-7 id="208" title="Contact Home Page"]' );?>
            </form>
          </div>
        </div>
      </section>
      <!-- <section>
        <div class="container">
          <article class="processus">
            <h3 class="processus__title">Comment fonctionne IRYS</h3>
            <p class="processus__txt"> 
              <ul>
                <li>Différentes entreprises afin de les accompagner</li>
                <li>Comprendre les problèmes auxquels ils sont</li>
                <li>Chaque mois, je rencontre les salariés</li>
                <li>Différentes entreprises afin de les accompagner</li>
                <li>Comprendre les problèmes auxquels ils sont</li>
              </ul>
            </p>
          </article>
          <article class="support">
            <h3 class="support__title">IRYS    a besoin de votre soutien</h3>
            <p class="support__txt">Chaque mois, je rencontre les salariés de différentes entreprises afin de les accompagner et comprendre les problèmes auxquels ils sont confrontés.</p>
            <div class="support__btn"><a>Soutenir IRYS</a></div>
          </article>
        </div>
      </section> -->
    </main>



<?php get_footer(); //appel du template footer.php ?>