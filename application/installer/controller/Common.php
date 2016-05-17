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
 * Time: 16/5/17 17:13
 * License: Apache 2.0
 * EMail: cngzwing@vip.163.com
 */

namespace app\installer\controller;

use think\Config;
use think\Controller;

class Common extends Controller {

    public function _initialize() {
        $template_path = Config::get('template.view_path');
        Config::set('dispatch_success_tmpl', $template_path . DS . 'dispatch_jump.tpl');
        Config::set('dispatch_error_tmpl', $template_path . DS . 'dispatch_jump.tpl');
    }
}