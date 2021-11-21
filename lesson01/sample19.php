<!-- JSONファイルを書き込む -->
<?php
$json_sample = [
    "title" => "JSONサンプル",
    "items" => [
        "りんご",
        "みかん"
    ]
    ];

    // JSON_UNESCAPED_UNICODE は日本語文字を出力するためのオプション
$json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
echo $json;
file_put_contents('json_sample.json', $json)
?>