<?php

// for 繰り返す数が決まっていたら
// while 繰り返す数が決まっていなかったら

// for, 
for ($i = 0; $i <10; $i++ ) {
    echo $i;
}
echo '<br>';

// continue, break 極力使わない
for ($i = 0; $i <10; $i++ ) {

    if($i === 5){
        break;
    }
    echo $i;
}
echo '<br>';

for ($i = 0; $i <10; $i++ ) {

    if($i === 5){
        continue;
    }
    echo $i;
}
echo '<br>';

// while
$j = 0;
// while($j < 5 ){
//     echo $j;
//     $j++;
// }
// echo '<br>';

// do while
do{echo $j; $j++;}
while($j < 5);
