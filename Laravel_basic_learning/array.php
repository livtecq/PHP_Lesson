<?php

// 配列 一行
$array = [1, 2, 3];
$array2 = ['田中', '山田', '川田'];

// 配列 複数行
$array3 = [
    [1, 2, 3],
    ['佐藤', '鈴木', '斎藤']
];


// echoではArrayとしか出力されない。
echo $array;


// 0から始まる
echo $array[1];


// 中身をすべて見たいとき
var_dump($array);

// 縦並びで表示させたいとき
echo ('<pre>');
var_dump($array);
echo ('</pre>');

echo ('<pre>');
var_dump($array3);
echo ('</pre>');

echo $array3[1][2];


// 連想配列

$array_member = [
    'name' => '田中',
    'height' => '170',
    'hobby' => 'サッカー',
];

echo $array_member['hobby'];


$array_member2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
    ];

    echo $array_member2['香川']['height'];


    echo ('<pre>');
    var_dump($array_member2);
    echo ('</pre>');


$arrray_member3 = [
    '1kumi' => [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ]
        ],
        '2kumi'=> [
            '長友' => [
                'height' => 160,
                'hobby' => 'サッカー'
            ],
            '乾' => [
                'height' => 168,
                'hobby' => 'サッカー'
            ]
            ],
        ];

echo $arrray_member3['2kumi']['長友']['height'];


?>