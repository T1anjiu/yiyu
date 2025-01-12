<?php
/*----------------------------------------------------------------
 | Software: [WillPHP framework]
 | Site: 113344.com
 |----------------------------------------------------------------
 | Author: 大松栩 <24203741@qq.com>
 | WeChat: www113344
 | Copyright (c) 2020-2023, 113344.com. All Rights Reserved.
 |---------------------------------------------------------------*/
declare(strict_types=1);
namespace middleware\controller;
use Closure;
class Test
{
    public function run(Closure $next, array $params = []): void
    {
        trace('开始测试');
        $next();
        trace('结束测试');
    }
}