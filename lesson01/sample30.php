<!-- 独自ファンクションの作成 -->
<?php
$price = 150;
$price_tax = ceil($price * 1.1);
echo $price_tax;
?>


<?php
/* 税込み金額を返す */ 
function intax($value) {
    return ceil($value * 1.1);
}

$price = 3250;
$price_tax = intax($price);
echo $price_tax;