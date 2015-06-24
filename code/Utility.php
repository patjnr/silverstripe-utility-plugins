<?php

/**
 * Class Utility
 */
class Utility extends Object
{

    static function include_code()
    {

    }

    static function includeBootstrap($jquery = false)
    {
        if ($jquery) {
            self::includeJquery();
        }
        Requirements::css(BOOTSTRAP_DIR . "/css/bootstrap.min.css");
        Requirements::javascript(BOOTSTRAP_DIR . '/js/bootstrap.js');
    }
    static function includeMasonry()
    {
        Requirements::javascript(MASONRY_DIR . '/dist/masonry.pkgd.min.js');
    }
    static function includeChosen()
    {
        Requirements::javascript(CHOSEN_DIR . '/chosen.jquery.min.js');
        Requirements::javascript(PLUGINS_DIR . '/chosen/js/chosen.jquery_init.js');
        Requirements::css(CHOSEN_DIR . '/chosen.css');
    }

    static function includeJquery()
    {
        Requirements::block(THIRDPARTY_DIR . "/jquery/jquery.js");
        Requirements::javascript(JQUERY_DIR . '/jquery.js');
        Requirements::javascript(JQUERY_MIGRATE_DIR . '/index.js');
    }

    public static function includeJQueryUI()
    {
        Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/jquery-ui.min.js');
        Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
    }


    public static function includePlugins()
    {
        Requirements::javascript(JQUERY_FORM_DIR . '/jquery.form.js');
        Requirements::javascript(UNDERSCORE_DIR . '/underscore.js');
        Requirements::javascript(MOMENT_DIR . '/moment.js');
        self::includeMasonry();
    }

}
