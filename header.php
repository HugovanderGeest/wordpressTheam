<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <meta name='author' content="Hugo van der Geest">
    <?php wp_head() ?>
</head>

<body>
    <header>
        <nav>
            <?php wp_nav_menu(array(

                'theme_location' => 'hooft-menu'
            )); ?>
        </nav>
        <div class="jumbotron">
            <h1 class="display-4"><a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a></h1>
            <p class="lead"><?php bloginfo('descrition') ?></p>
        </div>
    </header>