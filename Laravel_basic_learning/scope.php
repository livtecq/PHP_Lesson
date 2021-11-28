<?php

$globalVariable = 'グローバル変数です';

function checkScope($str){
  $localVariable = 'ローカル変数です';
// global $globalVariable; // 変数の前にglobalを宣言すれば使用は可能だが使用しないようにする。
  echo $localVariable;
//   echo $str;
}

echo $globalVariable;
echo '<br>';

// echo $localVariable; // ローカル変数は出力されない。関数内だけ使用可能

// CheckScope();

checkScope($globalVariable);

?>