<?php

define('TUT_THEME_DIR_URI', get_template_directory_uri());
define('TUT_THEME_DIR', get_template_directory());

// Include composer autoload 
require_once TUT_THEME_DIR . '/vendor/autoload.php';
class Tutorial_Theme {
    
    private static $instance = null;

    private function __construct() {

        include TUT_THEME_DIR . '/includes/categories.php';
        include TUT_THEME_DIR . '/includes/posts.php';


        add_action('wp_enqueue_script', [$this, 'enqueue-styles']);
    }

    private function enqueue_styles() {

        wp_enqueue_style('tutorial-theme', get_stylesheet_uri());
    }

    public static function get_instance() {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}


Tutorial_Theme::get_instance();