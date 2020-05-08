<?php

/**
 * Extension Manager/Repository config file for ext "forms_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Forms Package',
    'description' => 'Package of different forms for TYPO3 CNS',
    'category' => 'Frontend Plugins',
    'constraints' => [
        'depends' => [
            'form' => '9.5.16-9.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'T3UA\\FormsPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Vasyl Mosiychuk',
    'author_email' => 'vasyl@typo3.net.ua',
    'version' => '1.0.0',
];
