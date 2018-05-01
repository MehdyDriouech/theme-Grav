<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/theme-Grav/user/plugins/markdown-tasklists/blueprints.yaml',
    'modified' => 1525124933,
    'data' => [
        'name' => 'Markdown Task Lists',
        'version' => '1.0.0',
        'description' => 'Adds the ability to render task lists in Markdown',
        'icon' => 'asterisk',
        'author' => [
            'name' => 'Tim Robertson',
            'url' => 'https://funkjedi.com'
        ],
        'homepage' => 'https://github.com/funkjedi/grav-plugin-markdown-tasklists',
        'keywords' => 'markdown',
        'bugs' => 'https://github.com/funkjedi/grav-plugin-markdown-tasklists/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
