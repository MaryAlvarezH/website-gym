<?php 
/*
 * Template Name: Center Container (No sidebar)
 */
get_header(); ?>

<main class="container page section no-sidebar">
    <div class="main-container">
        <?php get_template_part('template-parts/loop-pages')?>
    </div>
</main>

<?php get_footer();?>