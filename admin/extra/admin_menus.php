<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

return [
    [
        'id' => 1,
        'name' => '文章管理',
        'icons' => 'menu',
        'module' => 'article',
        'controller' => 'content',
        'action' => 'index',
        'params' => '',
        'sub_menus' => [
            [
                'id' => 11,
                'name' => '文章列表',
                'icons' => 'menu',
                'module' => 'article',
                'controller' => 'content',
                'action' => 'lists',
                'params' => 'type=1',
                'sub_menus' => [
                    [
                        'name' => '文章回收站',
                        'icons' => 'menu',
                        'module' => 'article',
                        'controller' => 'content',
                        'action' => 'trash',
                        'params' => '',
                        'sub_menus' => [],
                    ],
                ],
            ],
            [
                'id' => 12,
                'name' => '新增文章',
                'icons' => 'menu',
                'module' => 'article',
                'controller' => 'content',
                'action' => 'add',
                'params' => '',
                'sub_menus' => [],
            ],
        ],
    ],
    [
        'id' => 2,
        'name' => '日志管理',
        'icons' => 'menu',
        'module' => 'article',
        'controller' => 'content',
        'action' => 'index',
        'params' => '',
        'sub_menus' => [
            [
                'id' => 21,
                'name' => '操作日志',
                'icons' => 'menu',
                'module' => 'system',
                'controller' => 'Logs',
                'action' => 'lists',
                'params' => '',
                'sub_menus' => [
                    [
                        'name' => '文章回收站',
                        'icons' => 'menu',
                        'module' => 'article',
                        'controller' => 'content',
                        'action' => 'trash',
                        'params' => '',
                        'sub_menus' => [],
                    ],
                ],
            ],
        ],
    ],
];
