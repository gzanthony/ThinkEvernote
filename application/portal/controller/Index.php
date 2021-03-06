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
 * Time: 16/5/16 16:12
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

namespace app\portal\controller;

use think\Controller;

class Index extends Controller {

    public function _initialize() {
        if (!file_exists(PRIVATE_PATH . 'install.lock')) {
            header("Location: install.php");
            die;
        }
    }

    public function index() {
        echo "Hello World!";
    }
}