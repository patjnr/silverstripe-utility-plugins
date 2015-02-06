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

}
