<?php

class SliderPack extends Object {

    function __construct() {
        parent::__construct();
        Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
    }

    static function includeRevolutionSlider() {

        Requirements::javascript(REVOLUTION_SLIDER_DIR . '/js/jquery.themepunch.plugins.min.js');
        Requirements::javascript(REVOLUTION_SLIDER_DIR . '/js/jquery.themepunch.revolution.min.js');
        Requirements::javascript(REVOLUTION_SLIDER_DIR . '/js/revolution.custom.js');
        Requirements::css(REVOLUTION_SLIDER_DIR . '/css/settings.css');
        Requirements::css(REVOLUTION_SLIDER_DIR . '/css/rs-responsive.css');
        Requirements::css(REVOLUTION_SLIDER_DIR . '/css/responsive-custom.css');
    }

}
