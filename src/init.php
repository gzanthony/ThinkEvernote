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
 * Time: 16/5/17 16:50
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

// 定义是否开启开发模式
define('APP_DEBUG', true);

// 定义根目录
define('WEBROOT_PATH', __DIR__);

// 定义私有数据目录
define('PRIVATE_PATH', WEBROOT_PATH . "/../datas/");

// 定义类库的绝对路径
define('LIBRARY_PATH', WEBROOT_PATH . "/../composers/");

// 定义应用目录
define('APP_PATH', WEBROOT_PATH . "/../application/");

// 定义第三方扩展库
define('EXTEND_PATH', WEBROOT_PATH . "/../extend/");

// 定义 RUNTIME 目录
define('RUNTIME_PATH', WEBROOT_PATH . "/../runtime/");

// 定义 ThinkPHP 类库目录
define('THINK_PATH', LIBRARY_PATH . "tp5/thinkphp/");