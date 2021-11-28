<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

function defaultValue($string = null) // 初期値をnullにすることでエラー回避
{
  echo $string . 'です';
}

//引数なし
defaultValue();
echo '<br>';

//引数あり
defaultValue('テスト');