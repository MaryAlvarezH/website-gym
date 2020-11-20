<?php while( have_posts() ): the_post();?>
    <h1 class="text-center primary-text">
        <?php the_title(); ?>
    </h1>

    <?php 
        if( has_post_thumbnail() ):
            the_post_thumbnail('blog', array('class' => 'featured-image'));
            
        endif;

        /* Default sizes param in the_post_thumbnail: 
        thumbnail: 150px
        medium: max 300px
        large: max 1024px
        full: original image size
        */
    ?>

    <?php the_content(); ?>
<?php endwhile; ?>