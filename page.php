<?php get_header(); ?>

<main class="container page section with-sidebar">
    <div class="main-container">
        <?php get_template_part('template-parts/loop-pages')?>
    </div>

   <?php get_sidebar(); ?>
</main>

<?php get_footer();?>