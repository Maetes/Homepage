<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "MTW IT-Solutions UG (haftungsbeschränkt)", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'ΜΤϢ ⚫Webentwicklung ⚫Appentwicklung ⚫IT-Beratung ⚫ITK-Services ⇒ Wir entwickeln Ihre Website/Homepage und beraten Sie gerne in allen IT bezogenen Themen', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['website erstellung', 'homepage erstellung','website erstellen', 'wordpress', 'app', 'it beratung', 'appentwicklung', 'webentwicklung', 'cms', 'typo3', 'laravel', 'softwareentwicklung', 'website', 'homepage', 'bonn', 'rhein-sieg-kreis', 'rhein-sieg'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => 'index, follow', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'MTW IT-Solutions UG (haftungsbeschränkt)', // set false to total remove
            'description' => 'ΜΤϢ ⚫Webentwicklung ⚫Appentwicklung ⚫IT-Beratung ⚫ITK-Services ⇒ Wir entwickeln Ihre Website/Homepage und beraten Sie gerne in allen IT bezogenen Themen', // set false to total remove
            'url'         => 'https://mtw-it.de', // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => false,
            'images'      => [],
            'locale'      => 'de'
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'ΜΤϢ ⚫Webentwicklung ⚫Appentwicklung ⚫IT-Beratung ⚫ITK-Services ⇒ Wir entwickeln Ihre Website/Homepage und beraten Sie gerne in allen IT bezogenen Themen', // set false to total remove
            'url'         => 'https://mtw-it.de', // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
