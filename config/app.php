<?php
/*----------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: 113344.com
 |----------------------------------------------------------------
 | Author: 大松栩 <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2023, 113344.com. All Rights Reserved.
 |---------------------------------------------------------------*/
return [
    'debug' => false, //调试模式
    'trace' => false, //显示调试栏
    'url_rewrite' => true, //url重写(开启伪静态设为true)
    'log_sql_level' => 0, //记录sql到日志, 0不记录1只记录execute2记录全部sql
    'app_key' => 'willphp', //用于加密解密
    'app_list' => ['index', 'admin', 'api'], //可访问模块(应用)
    'api_list' => ['api'], //Api应用列表
    'view_path' => ['index' => 'template'], //设置模板路径 应用=>根目录下的路径
    'theme_on' => ['index'], // 设置index为多主题
    'theme_get' => 't', //主题切换$_GET变量 设为空关闭主题切换
];