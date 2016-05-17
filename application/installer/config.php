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
 * Time: 16/5/16 17:45
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

return [
    'template' => [
        'view_path' => WEBROOT_PATH . '/../views/installer' // 默认模板目录
    ],
    'deny_module_list' => [COMMON_MODULE, 'runtime', 'portal'],  // 禁止访问模块
    'dispatch_success_tmpl'  => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
    'dispatch_error_tmpl'    => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
];