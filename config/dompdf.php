<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | Set some default values. It is possible to add all defines that can be set
    | in dompdf_config.inc.php. You can also override the entire config file.
    |
    */
    'show_warnings' => false,   // Throw an Exception on warnings from dompdf

    'public_path' => null,  // Override the public path if needed

    /*
     * Dejavu Sans font is missing glyphs for converted entities, turn it off if you need to show € and £.
     */
    'convert_entities' => true,

    'options' => [
        /**
         * The location of the DOMPDF font directory
         *
         * The location of the directory where DOMPDF will store fonts and font metrics
         * Note: This directory must exist and be writable by the webserver process.
         * *Please note the trailing slash.*
         */

        'font_dir' => public_path('storage/fonts/Amiri/'), // المسار إلى الخطوط
        'font_cache' => storage_path('fonts/'), // ذاكرة التخزين المؤقت للخطوط
        'default_font' => 'Amiri', // تعيين الخط الافتراضي
        'font_family' => [
            'Amiri' => [
                'normal' => 'Amiri-Regular.ttf',
                'bold' => 'Amiri-Bold.ttf',
                'italic' => 'Amiri-Italic.ttf',
                'bold_italic' => 'Amiri-BoldItalic.ttf',
            ],
        ],



        /**
         * The location of a temporary directory.
         *
         * The directory specified must be writeable by the webserver process.
         * The temporary directory is required to download remote images and when
         * using the PDFLib back end.
         */
        'temp_dir' => sys_get_temp_dir(),

        /**
         * ==== IMPORTANT ====
         *
         * dompdf's "chroot": Prevents dompdf from accessing system files or other
         * files on the webserver.  All local files opened by dompdf must be in a
         * subdirectory of this directory.  DO NOT set it to '/' since this could
         * allow an attacker to use dompdf to read any files on the server.  This
         * should be an absolute path.
         */
        'chroot' => realpath(base_path()),

        /**
         * Protocol whitelist
         *
         * Protocols and PHP wrappers allowed in URIs, and the validation rules
         * that determine if a resource may be loaded. Full support is not guaranteed
         * for the protocols/wrappers specified
         * by this array.
         *
         * @var array
         */
        'allowed_protocols' => [
            'file://' => ['rules' => []],
            'http://' => ['rules' => []],
            'https://' => ['rules' => []],
        ],

        /**
         * Operational artifact (log files, temporary files) path validation
         */
        'artifactPathValidation' => null,

        /**
         * @var string
         */
        'log_output_file' => null,

        /**
         * Whether to enable font subsetting or not.
         */
        'enable_font_subsetting' => false,

        /**
         * The PDF rendering backend to use
         *
         * Valid settings are 'PDFLib', 'CPDF' (the bundled R&OS PDF class), 'GD' and
         * 'auto'. 'auto' will look for PDFLib and use it if found, or if not it will
         * fall back on CPDF. 'GD' renders PDFs to graphic files.
         */
        'pdf_backend' => 'CPDF',

        /**
         * html target media view which should be rendered into pdf.
         * List of types and parsing rules for future extensions:
         * http://www.w3.org/TR/REC-html40/types.html
         */
        'default_media_type' => 'screen',

        /**
         * The default paper size.
         *
         * North America standard is "letter"; other countries generally "a4"
         */
        'default_paper_size' => 'a4',

        /**
         * The default paper orientation.
         *
         * The orientation of the page (portrait or landscape).
         *
         * @var string
         */
        'default_paper_orientation' => 'portrait',

        /**
         * The default font family
         *
         * Used if no suitable fonts can be found. This must exist in the font folder.
         *
         * @var string
         */
        // اجعل الخط الافتراضي هو AmiriQuran

        /**
         * Image DPI setting
         */
        'dpi' => 96,

        /**
         * Enable embedded PHP
         */
        'enable_php' => false,

        /**
         * Enable inline JavaScript
         */
        'enable_javascript' => true,

        /**
         * Enable remote file access
         */
        'enable_remote' => true,

        /**
         * List of allowed remote hosts
         */
        'allowed_remote_hosts' => null,

        /**
         * A ratio applied to the fonts height to be more like browsers' line height
         */
        'font_height_ratio' => 1.1,

        /**
         * Use the HTML5 Lib parser
         *
         * @deprecated This feature is now always on in dompdf 2.x
         *
         * @var bool
         */
        'enable_html5_parser' => true,
    ],

];
