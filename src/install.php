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
 * Time: 16/5/16 15:07
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

require __DIR__ . '/init.php';

// 关闭应用自动执行
define('APP_AUTO_RUN', false);

// 加载 ThinkPHP 5.0 类库
require THINK_PATH . "start.php";

// 绑定index模块的index控制器
\think\Route::bind('module','installer');

// 执行应用
\think\App::run(\think\Request::create('installer'));