<!-- iが3になった時、繰り返し処理をスキップする -->

<?php
	for($i = 0; $i <= 4; $i ++){
		if($i == 3) {
			continue;
		}
		echo $i."\n";
	}