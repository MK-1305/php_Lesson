<!-- 配列は複数のデータを入れられるロッカー -->
<!-- データ(要素)の場所をインデックス(添字)という,必ず0から始まる -->
<!-- 変数 = array(要素数); -->

<?php
$a = array(3);
$a[0] = "sato";
$a[1] = "suzuki";
$a[2] = "takahashi";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";

// arrayの中に直接要素を書くこともできる
$a = array("sato","suzuki","takahashi")