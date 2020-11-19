<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="navigation-bar">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="GymFitness">
                </div>

                <?php
                    $args = array(
                        'theme_location' => 'menu_principal',
                        'container' => 'nav',
                        'container_class' => 'main-menu'
                    );

                    wp_nav_menu($args);
                ?>
            </div>
        </div>
    </header>

<!-- las estiquetas de cierre las ponemos en el footer -->
