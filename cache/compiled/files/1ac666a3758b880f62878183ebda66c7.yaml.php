<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1516454049,
    'data' => [
        'title' => 'Siofra\'s Site',
        'description' => 'Stuff I\'m thinking about',
        'author' => [
            'name' => 'Siofra Kelleher',
            'email' => 'siofra@siofrakelleher.com'
        ],
        'metadata' => [
            'description' => 'Siofra Kelleher&apos;s Site'
        ],
        'taxonomies' => [
            0 => 'tag'
        ],
        'owner' => [
            'name' => 'Siofra Kelleher',
            'email' => 'siofra@siofrakelleher.com',
            'description' => 'Awesome Person, Awesome Life',
            'google_plus' => 'https://plus.google.com/101079245936723491470'
        ],
        'logo' => '/user/themes/notepad/images/gus.jpg',
        'google_analytics' => NULL,
        'google_verify' => NULL,
        'bing_verify' => NULL,
        'links' => [
            0 => [
                'title' => 'Categories',
                'url' => '/categories'
            ],
            1 => [
                'title' => 'About',
                'url' => '/about'
            ]
        ],
        'include' => [
            0 => '.htaccess'
        ],
        'exclude' => [
            0 => 'lib',
            1 => 'config.rb',
            2 => 'Gemfile',
            3 => 'Capfile',
            4 => 'Gemfile.lock',
            5 => 'config',
            6 => 'log',
            7 => 'Rakefile',
            8 => 'Rakefile.rb',
            9 => 'tmp',
            10 => 'less',
            11 => '*.sublime-project',
            12 => '*.sublime-workspace',
            13 => 'test',
            14 => 'spec',
            15 => 'Gruntfile.js',
            16 => 'package.json',
            17 => 'node_modules'
        ]
    ]
];
