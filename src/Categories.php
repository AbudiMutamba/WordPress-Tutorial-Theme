<?php

namespace Abudi\Tutorial_Theme;

class Categories {
    public static function current_category() {
        $queried_object = get_queried_object();
        var_dump($queried_object);
    }
}