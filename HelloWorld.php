<!-- ?>は省略可能 -->
<!-- \はoptionと￥で入力 -->
<!-- \nは改行 -->
<?php echo "Hello World!"."\n"; ?>
<?php echo "Good morning!"."\n"; ?>
<?php echo "Good afternoon!"."\n"; ?>
<?php echo "Good evening!"."\n"; ?>
<!-- 変数を宣言するときは$を付けておく -->
<!-- 予約語を変数にする事は可能だができるだけ避ける -->
<?php
$num = 1;
$num01 = 2;
$num_01 = 3;

echo $num. "\n";
echo $num01. "\n";
echo $num_01. "\n";
