<!-- XMLファイルを読み込もう -->
<?php
$xmlTree = simplexml_load_file('rss.xml');
// $xmlTreeのchannelのitemの要素を変数$itemに格納する。
foreach ($xmlTree->channel->item as $item) {
?>
・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>
<?php
}
// echo $xmlTree->channel->title;
// echo $xmlTree->channel->link;
// echo $xmlTree->channel->item[1]->title;
?>

<!-- // {} ではなく : での書き方 -->
<?php
$xmlTree = simplexml_load_file('rss.xml');
foreach ($xmlTree->channel->item as $item):
?>
・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?>
