<?php
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types()
{
    acf_register_block_type(
        array(
            'name' => 'Hero Section',
            'title' => __('Hero Section'),
            'render_template' => '/templates/blocks/hero-section.php',
            'icon' => 'block-default',
            'keywords' => array('hero section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Service Section',
            'title' => __('Service Section'),
            'render_template' => '/templates/blocks/service-section.php',
            'icon' => 'block-default',
            'keywords' => array('service section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Blog Section',
            'title' => __('Blog Section'),
            'render_template' => '/templates/blocks/blog-section.php',
            'icon' => 'block-default',
            'keywords' => array('blog section'),
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Team Section',
            'title' => __('Team Section'),
            'render_template' => '/templates/blocks/team-section.php',
            'icon' => 'block-default',
            'keywords' => array('team section'),
        )
    );
}
?>