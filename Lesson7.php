<!-- データ型 数字の場合-->
<?php
$NUM01 = 123;
$NUM02 = 1.23;

// gettype()でをデータ型を確認する事ができる
// float型(少数第一)はphpのデフォルトでduble(少数第二)で返される
echo gettype($NUM01)."\n";
echo gettype($NUM02)."\n";

// var_dumpは変数の中身とデータ型を返す
var_dump($NUM02)."\n";

