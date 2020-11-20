<?php get_header(); ?>

<main class="container page section no-sidebar">
    <div class="main-container text-center">
        <?php get_template_part('template-parts/loop-pages')?>
        <?php gymfitness_lista_clases(); ?>
    </div>
</main>

<?php get_footer();?>