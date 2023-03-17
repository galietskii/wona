<?php wp_head(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php 
$header_shop = get_field('header_shop', 'options');
$header_shop_link = get_field('header_shop_link', 'options');
$header_search = get_field('header_search', 'options');
$header_search_link = get_field('header_search_link', 'options');
?>
<body>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php the_custom_logo(); ?>
            </div>
            <div class="col">
                <div class="header__menu">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-menu',
                        'container_class' => 'custom-menu-class')); ?>
                        <div class="header__menu-details">
                            <a href="<?php echo $header_shop_link['url']; ?>" target="<?php echo $header_shop_link['target']; ?>">
                                <img src="<?php echo esc_url($header_shop['url']); ?>" alt="<?php echo esc_attr($header_shop['alt']); ?>"/>
                            </a>
                            <a href="<?php echo $header_search_link['url']; ?>" target="<?php echo $header_search_link['url']; ?>">
                                <img src="<?php echo esc_url($header_search['url']); ?>" alt="<?php echo esc_attr($header_search['alt']); ?>"/>
                            </a>
                        </div>
                </div>
                <div class="hamburger">
                    <div class="bar"></div>
                </div>
            </div>
            <nav class="mobile-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'container_class' => 'custom-menu-class')); ?>
            </nav>
        </div>
    </div>
</header>