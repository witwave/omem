<?php
return [
    'prefix'=>'admin',
    'data' => [
        'topics' => ['name' => 'topics', 'path' => 'topics','icon'=>'fa fa-link'],
        'tweets' => ['name' => 'tweets', 'prefix' => 'tweets', 'icon'=>'fa fa-link','children' => [
            'tweets-create' => ['name' => 'create', 'path' => 'tweets/create'],
            'tweets' => ['name' => 'tweets', 'path' => 'tweets'],
            ]
        ],
        'todo' => ['name' => 'todo', 'path' => 'todo','icon'=>'fa fa-link'],
        'user' => ['name' => 'user', 'path' => 'user','icon'=>'fa fa-link'],
    ]
];