<?php

return [
    /*
    |-----------------------------------------------------------------
    | Default Prefix
    |-----------------------------------------------------------------
    |
    | This config option allows you to define a default prefix for
    | your icons. The dash separator will be applied automatically
    | to every icon name. It's required and needs to be unique.
    |
    */
    'prefix' => 'mingcute',
    /*
    |-----------------------------------------------------------------
    | Fallback Icon
    |-----------------------------------------------------------------
    |
    | This config option allows you to define a fallback
    | icon when an icon in this set cannot be found.
    |
    */
    'fallback' => '',
    /*
    |-----------------------------------------------------------------
    | Default Set Classes
    |-----------------------------------------------------------------
    |
    | This config option allows you to define some classes which
    | will be applied by default to all icons within this set.
    |
    */
    'class' => '',
    /*
    |-----------------------------------------------------------------
    | Default Set Attributes
    |-----------------------------------------------------------------
    |
    | This config option allows you to define some attributes which
    | will be applied by default to all icons within this set.
    |
    */
    'attributes' => [
        // 'width' => 50,
        // 'height' => 50,
    ],
    /*
    |-----------------------------------------------------------------
    | With Categories
    |-----------------------------------------------------------------
    |
    | This config option allows you to enable or disable the use of categories
    | for your icons. When enabled, icons will be grouped by categories.
    | When disabled, icons will not be grouped by categories.
    |
    | Example:
    | <x-mingcute-development.code /> - when true
    | <x-mingcute-code /> - when false
    |
    */
    'with_categories' => true,
];