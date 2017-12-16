<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",

    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/base.min.css",
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css",
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => ["css/light.min.css"]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => ["css/color.min.css"]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => ["css/dark.min.css"]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => ["css/colorful.min.css"]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => ["css/typography.min.css"]
        ],

        "separator2" => "------------------------------------------------",

        "element1"      => [
            "title"      => "Design element #1",
            "class"      => "element1",
            "stylesheets" => ["css/element1.min.css"]
        ],

        "element2"      => [
            "title"      => "Design element #2",
            "class"      => "element2",
            "stylesheets" => ["css/element2.min.css"]
        ],

        "element3"      => [
            "title"      => "Design element #3",
            "class"      => "element3",
            "stylesheets" => ["css/element3.min.css"]
        ],

        "separator3" => "------------------------------------------------",

        "principle1"      => [
            "title"      => "Design principle #1",
            "class"      => "principle1",
            "stylesheets" => ["css/principle1.min.css"]
        ],

        "principle2"      => [
            "title"      => "Design principle #2",
            "class"      => "principle2",
            "stylesheets" => ["css/principle2.min.css"]
        ],
    ]
];
