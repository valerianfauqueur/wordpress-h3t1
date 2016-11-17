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