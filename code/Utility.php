<?php

class Utility extends Object {

    static function include_code() {

        self::includeBootstrap();
        self::includeChosen();
        //self::includeIsotope();
        self::includejQueryUI();
       // self::includeGalleria();
        //self::includeRaty();
    }

    static function includeTinymce() {
        Requirements::javascript(TINYMCE_DIR . '/tinymce.min.js');
        Requirements::customScript("
            tinymce.init({
                selector: \"textarea.mceEditor\",
                mode: 'specific_textareas',
                 menubar : false,
                height: '300',
                plugins: [
                    \"advlist autolink lists charmap print preview anchor\",
                    \"searchreplace visualblocks code wordcount fullscreen\",
                    \"insertdatetime hr table contextmenu paste\"
                ],
                toolbar: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\"
            });
        ");
    }

    static function includeGalleria() {
        $themeDir = THEMES_DIR . "/" . SSViewer::current_theme();
        Requirements::css($themeDir . '/css/galleria.twelve.css');
    }

    static function includeChosen() {
        Requirements::javascript(CHOSEN_DIR . '/js/chosen.jquery.js');
        Requirements::javascript(CHOSEN_DIR . '/js/chosen.jquery_init.js');
        Requirements::css(CHOSEN_DIR . '/css/chosen.css');
    }

    static function includeBootstrap() {
        Requirements::css(BOOTSTRAP_DIR . "/css/bootstrap.css");
        Requirements::javascript(BOOTSTRAP_DIR . '/js/bootstrap.js');
    }

    static function includeIsotope() {
        Requirements::javascript(ISOTOPE_DIR . '/jquery.isotope.min.js');
    }

    public static function includejQueryUI() {
        //Requirements::javascript(THIRDPARTY_DIR . '/jquery-ui/jquery-ui.min.js');
        Requirements::css(THIRDPARTY_DIR . '/jquery-ui-themes/smoothness/jquery-ui.css');
    }

    public static function includeRaty() {
        Requirements::javascript(RATY_DIR . "/js/jquery.raty.js");
        Requirements::javascript(RATY_DIR . "/js/raty_init.js");
    }

}
