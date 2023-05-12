<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

/*return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];*/

Route::rule('/','index/index/index');

Route::rule('/index','index/index/index');

Route::rule('/about','index/index/about');

Route::rule('/origi','index/index/origi');

Route::rule('/model','index/index/model');

Route::rule('/originalstatement','index/index/originalstatement');

Route::rule('/reference','index/index/reference');

Route::rule('/cocacola','index/index/cocacola');
