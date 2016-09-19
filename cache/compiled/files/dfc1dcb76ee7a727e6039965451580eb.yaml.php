<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/system/blueprints/pages/external.yaml',
    'modified' => 1473856450,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zа-я][a-zа-я0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'header.title' => [
                                    'type' => 'text',
                                    'autofocus' => true,
                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                ],
                                'header.external_url' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_ADMIN.EXTERNAL_URL',
                                    'placeholder' => 'https://getgrav.org',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
