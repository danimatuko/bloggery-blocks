<?php


function register_bloggery_blocks() {

    $blocks = [
        ['name' => 'fancy-header']
    ];

    foreach ($blocks as $block) {
        register_block_type(BLOGGERY_PLUGIN_DIR . 'build/blocks/' . $block['name']);
    }
}

add_action('init', 'register_bloggery_blocks');
