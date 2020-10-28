<!-- ブーリアン型 -->
<!-- phpのboolean型は特殊でtrueの時は1をfalseの時は何も表示されません -->
<?php
$a = 10;
$b = 1;
$bool1 = ($a > $b);

echo $bool1."\n";
echo gettype($bool1)."\n";