<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/bzhang/repo/html/user/themes/igc/blueprints.yaml',
    'modified' => 1498348166,
    'data' => [
        'name' => 'Igc',
        'version' => '0.1.0',
        'description' => 'IGC theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Bo Zhang',
            'email' => 'bo.zhangut@gmail.com'
        ],
        'homepage' => 'https://github.com/bo-zhang/grav-theme-igc',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/bo-zhang/grav-theme-igc/issues',
        'readme' => 'https://github.com/bo-zhang/grav-theme-igc/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
