<?php

/**
 * Class Utility
 */
class Utility extends Object {

    static function include_code() {

    }

    static function includeBootstrap() {
        Requirements::css(BOOTSTRAP_DIR . "/css/bootstrap.min.css");
        Requirements::javascript(BOOTSTRAP_DIR . '/js/bootstrap.min.js');
    }
    static function includeChosen() {
        Requirements::javascript(CHOSEN_DIR . '/chosen.jquery.min.js');
        Requirements::javascript(PLUGINS_DIR . '/chosen/js/chosen.jquery_init.js');
        Requirements::css(CHOSEN_DIR . '/chosen.css');
    }
}
