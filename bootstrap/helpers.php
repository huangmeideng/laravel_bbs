<?php

/**
 * @author: Kinano
 * @return mixed
 * 把当前请求路由转化为类名称
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

/**
 * @author: Kinano
 * @param $value
 * @param int $length
 * @return string
 * 自动截取字符串
 */
function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}