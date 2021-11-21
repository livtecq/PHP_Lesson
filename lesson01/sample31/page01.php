<!-- 外部ファイルを読み込む require -->

<?php
require('intax.php');
$price =  1500;
$price_tax = intax($price);
echo $price_tax;
?>