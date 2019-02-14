<?php

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// +----------------------------------------------------------------------
// | 平台自定义常量
// +----------------------------------------------------------------------
define('COMMON_INCLUDE_PATH', dirname(dirname(__DIR__)) . '/include/');
include_once COMMON_INCLUDE_PATH.'constants.php';
include_once COMMON_INCLUDE_PATH.'common_function.php';

// 加载文件
require __DIR__ . '/../vendor/autoload.php';
