<?php
/**
 * 后台边栏设置
 *
 * Route::resource("pages", "PageController");
 * Route::resource("members", "MemberController");
 * Route::resource("events", "EventController");
 * Route::resource("meetups", "MeetupController");
 * Route::resource("joiners", "JoinerController");
 * Route::resource("groups","GroupController");
 *
 */
return [
    /*
     'data' => [
        'topics' => ['name' => 'topics', 'path' => 'topics', 'icon' => 'fa fa-link'],
        'tweets' => ['name' => 'tweets', 'prefix' => 'tweets', 'icon' => 'fa fa-link',
            'children' => [
                'tweets-create' => ['name' => 'create', 'path' => 'tweets/create'],
                'tweets' => ['name' => 'tweets', 'path' => 'tweets']
            ],
        ],
        'todo' => ['name' => 'todo', 'path' => 'todo', 'icon' => 'fa fa-link'],
        'user' => ['name' => 'user', 'path' => 'user', 'icon' => 'fa fa-link'],
    ]
    */
    'data' => [
        'dashboard' => [
            'name' => '控制台',
            'path' => 'dashboard',
            'icon' => 'fa fa-dashboard'
        ],
        'meetups' => [
            'name' => '活动',
            'path' => 'meetups',
            'icon' => 'fa fa-server'
        ],
        'group' => [
            'name' => '社群',
            'path' => 'groups',
            'icon' => 'fa fa-group'
        ],
        'members' => [
            'name' => '会员',
            'path' => 'members',
            'icon' => 'fa fa-user'
        ],
        'address'=>[
            'name' => '通讯录',
            'path' => 'address',
            'icon' => 'fa fa-phone'
        ],
        'todo' => [
            'name' => '计划',
            'path' => 'todo',
            'icon' => 'fa fa-tasks'
        ],
        'user' => [
            'name' => '用户',
            'path' => 'user',
            'icon' => 'fa  fa-cog'
        ],
    ]
];