<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <nav class="navbar">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><?php bloginfo('name'); ?></a>
            <div class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu'
                ));
                ?>
            </div>
        </nav>
    </div>
</header>