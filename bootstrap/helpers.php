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