

<?php
	for($i = 1; $i <= 10; $i ++){
		if($i == 2){
		  continue;
		　　3をスキップ
		} else if($i == 7) {
		  break;
		   7で終了
		} else {
		  echo $i."\n";
		  それ以外ならカウンタ変数を出力
		}


	}