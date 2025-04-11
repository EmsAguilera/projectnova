<?php

add_action('acf/init', function () {
    acf_register_block_type([
        'name'            => 'hero-section',
        'title'           => __('Hero Section'),
        'description'     => __('A full-width hero section with background image, heading, and button.'),
        'render_callback' => function ($block, $content = '', $is_preview = false) {
            echo \Roots\view('blocks.hero-section', [
                'block' => $block,
                'is_preview' => $is_preview,
            ])->render();
        },
        'category'        => 'formatting',
        'icon'            => 'slides',
        'mode'            => 'edit',
        'supports'        => ['align' => false],
    ]);
    
    acf_register_block_type([
        'name'            => 'product-grid',
        'title'           => __('Product Grid'),
        'description'     => __('A section that displays a grid of products.'),
        'render_callback' => function ($block, $content = '', $is_preview = false) {
            // Use the correct view path (without "blocks.acf/")
            echo \Roots\view('blocks.product-grid', [
                'block' => $block,
                'is_preview' => $is_preview,
            ])->render();
        },
        'category'        => 'formatting',
        'icon'            => 'grid-view',
        'mode'            => 'edit',
        'supports'        => ['align' => false],
    ]);

    acf_register_block_type([
        'name'            => 'blog-carousel',
        'title'           => __('Blog Carousel'),
        'description'     => __('A horizontal scrolling list of blog posts with filters.'),
        'render_callback' => function ($block, $content = '', $is_preview = false) {
            echo \Roots\view('blocks.blog-carousel', [
                'block' => $block,
                'is_preview' => $is_preview,
            ])->render();
        },
        'category'        => 'formatting',
        'icon'            => 'welcome-widgets-menus',
        'mode'            => 'edit',
        'supports'        => ['align' => false],
    ]);
    
    acf_register_block_type([
        'name'            => 'about-section',
        'title'           => __('About Section'),
        'description'     => __('A two-column layout with text and image.'),
        'render_callback' => function ($block, $content = '', $is_preview = false) {
            echo \Roots\view('blocks.about-section', [
                'block' => $block,
                'is_preview' => $is_preview,
            ])->render();
        },
        'category'        => 'formatting',
        'icon'            => 'admin-users',
        'mode'            => 'edit',
        'supports'        => ['align' => false],
    ]);
});