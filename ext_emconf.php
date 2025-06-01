<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Demo Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MircoKlein\\DemoSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mirco Klein',
    'author_email' => 'mikl4808@bht-berlin.de',
    'author_company' => 'Mirco Klein',
    'version' => '1.0.0',
];
