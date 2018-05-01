<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/theme-Grav/user/config/site.yaml',
    'modified' => 1525124897,
    'data' => [
        'title' => 'Grav',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Moonshine & Krowry',
            'email' => 'contact@geekbuystuff.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'GeekbuyStuff est un site qui est fait par des fans de nouvelles technos pour des fans de nouvelles technos. Au programme tests , Jeux-vidéos et tutoriels.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
