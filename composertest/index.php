<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\TestController;

$app = new TestController;
$app->run();

use Carbon\Carbon;

echo Carbon::now(); // 2016-06-16 09:52:03

echo Carbon::now()->format('今日はY年m月d日だよ！'); // 今日は2016年06月16日だよ！