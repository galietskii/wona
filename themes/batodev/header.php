<?php wp_head(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="vector-x">
            <?php show_custom_logo(); ?>

            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container_class' => 'custom-menu-class')); ?>
        </div>
    </div>
</header>