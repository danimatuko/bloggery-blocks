<?php
/*
Plugin Name: Bloggery Block
Description: Gutenberg blocks for the Bloggery theme
Plugin URI: https://github.com/danimatuko/bloggery-blocks
Author URI: https://github.com/danimatuko
Version: 1.0
Author: Dani Matuko
Text Domain: bloggery-blocks
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit('Seems you stambled here by a mistake 🤭');
}


//setup
define('BLOGGERY_PLUGIN_DIR', plugin_dir_path(__FILE__));

require BLOGGERY_PLUGIN_DIR . 'inc/register-blocks.php';
