<?php
/*--------------------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: www.113344.com
 |--------------------------------------------------------------------------
 | Author: 无念 <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2022, www.113344.com. All Rights Reserved.
 |-------------------------------------------------------------------------*/
namespace willphp\core; //命名空间
header('Content-type: text/html; charset=utf-8'); //设置编码
date_default_timezone_set('PRC'); //设置时区
define('ROOT_PATH', strtr(realpath(__DIR__.'/../'),'\\', '/')); //根目录
require ROOT_PATH.'/willphp/willphp.php'; //载入引导文件
App::name('index')->bootstrap(); //启动index应用
//App::name(['api'=>'api','admin.willphp.com'=>'admin','*'=>'index'])->bootstrap(); //域名绑定应用