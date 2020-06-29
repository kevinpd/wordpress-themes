<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Always keep last-->
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar">
    <section class="navbar__main">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'main-menu',
                'theme_location' => 'main-menu'
            )
        );
        ?>
    </section>

    <section class="navbar__social">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'social-menu',
                'theme_location' => 'social-menu'
            )
        );
        ?>
    </section>
</nav>