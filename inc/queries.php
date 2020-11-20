<?php
    function gymfitness_lista_clases() {?>
        <ul class="list-classes">
            <?php
                // https://developer.wordpress.org/reference/classes/wp_query/
                $args = array(
                    'post_type' => 'gymfitness_clases',
                    'post_per_page' =>10,
                    'order' => 'ASC',
                    'orderby' => 'title'
                );

                $clases = new WP_Query($args);

                while( $clases->have_posts() ): $clases->the_post();
            ?>
                    <li>
                        <h1><?php the_title(); ?></h1>
                    </li>

                <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php
    }
?>