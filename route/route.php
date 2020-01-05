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

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];

//Route::rule('index-<id>', 'index/index/index', 'get');
//Route::rule('/', 'index/index/index');
//Route::rule('article-<id>', 'index/article/article', 'get');
//Route::rule('search', 'index/article/articlesearch', 'post');
//Route::rule('login', 'index/index/login', 'get|post');
//Route::rule('loginout', 'index/index/loginout', 'post');
//Route::rule('register', 'index/index/register', 'get|post');
//Route::rule('my', 'index/article/articlemember', 'get');
//Route::rule('comment', 'index/article/articlecomment', 'post');
//Route::miss('index/index/miss');



Route::group('admin', function (){
    Route::rule('login','admin/index/login','get|post');
    Route::rule('register','admin/index/register','get|post');
    Route::rule('forget','admin/index/forget','get|post');
    Route::rule('codein','admin/index/codein','post');

});