<!-- sumを使い2~10を足し上げる -->

<?php
	$arr = [2,4,6,8,10];
	$sum = 0;

	for($i = 0; $i <= 4; $i++){
		$sum += $arr[$i];
	}
	echo $sum."\n";