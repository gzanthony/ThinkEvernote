<?php
/**
 * Copyright (c) 2016. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

/**
 * Created by ThinkEvernote.
 * User: mac01
 * Time: 16/5/16 15:42
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

return [
    'url_route_on' => true,
    'app_status' => 'debug',
    'log'          => [
        'type' => 'trace', // 支持 socket trace file
    ],
    'default_module' => 'portal', // 默认模块
    'template' => [
        'view_path' => WEBROOT_PATH . '/../views/default/portal' // 默认模板目录
    ],
    'default_timezone' => 'Asia/Chongqing',  // 默认区时
    'session' => [
        'prefix' => 'te' // session 前缀
    ],
];