<?php

/**
 * Class Utility
 */
class Utility extends Object
{

    static function include_code()
    {
        self::includePlugins();
        self::includeMasonry();

        Requirements::javascript(UTILITY_DIR . '/js/smartresize.js');


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
        Requirements::javascript(JQUERY_UI_DIR . '/jquery-ui/jquery-ui.min.js');
        Requirements::css(JQUERY_UI_DIR . '/themes/smoothness/jquery-ui.min.css');
    }


    public static function includePlugins()
    {
        Requirements::javascript(JQUERY_FORM_DIR . '/jquery.form.js');
        Requirements::javascript(UNDERSCORE_DIR . '/underscore.js');
        Requirements::javascript(MOMENT_DIR . '/moment.js');
        Requirements::css(UTILITY_BOWER_DIR . '/components-font-awesome/css/font-awesome.min.css');

    }

    public static function includeIsotope()
    {
        Requirements::javascript(ISOTOPE_DIR . '/dist/isotope.pkgd.min.js');
    }

    public static function includeDataTables()
    {
        Requirements::css(DATA_TABLES_DIR . "/media/css/dataTables.bootstrap.css");
        Requirements::javascript(DATA_TABLES_DIR . "/media/js/jquery.dataTables.min.js");
        Requirements::javascript(DATA_TABLES_DIR . "/media/js/dataTables.bootstrap.js");
    }
}
