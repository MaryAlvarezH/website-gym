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
                <li class="class card gradient">
                    <?php the_post_thumbnail('median')?>
                    <div class="container">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>

                        <?php
                            $init_date = get_field('hora_inicio');
                            $end_date = get_field('hora_fin');
                        ?>

                        <p>
                            <?php the_field('dias_clase'); ?> - <?php echo $init_date . " a " . $end_date; ?>
                        </p>
                    </div>
                </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php
    }

    /* 
    - Template tags en wordPress: the_post_thumbnail, the_permalink, the_title, etc 
                                  tienen una función con el prefijo get_ por si se requiere asignar el valor a una variable
                                  get_the_post_thumbnail

    - Advance custom fields: the_flied('name')
                            tienen una función con el prefijo get_  enb lugar de the_ por si se requiere asignar el valor a una variable
                            get_flied('name')
                            */
                                    
?>