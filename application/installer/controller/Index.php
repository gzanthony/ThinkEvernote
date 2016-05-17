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
 * Time: 16/5/16 17:10
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

namespace app\installer\controller;

class Index extends Common {

    public function index() {

        if (!file_exists(PRIVATE_PATH)) {
            return $this->error(PRIVATE_PATH . ' 文件夹不存在', null, '', -1);
        }

        if (!is_writable(WEBROOT_PATH . '/../datas')) {
            return $this->error(WEBROOT_PATH . '/../datas' . ' 文件夹不可写入!', null, '', -1);
        }

        if (!extension_loaded('xsl')) {
            return $this->error('缺少 PHP XSL 扩展!', null, null, -1);
        }

        if (!extension_loaded('curl')) {
            return $this->error('缺少 PHP CURL 扩展!', null, null, -1);
        }

        return \think\Response::create()->isExit(true)->location('install.php?s=step1');
    }

    public function step1() {
        echo 'here is step1.';
    }
}