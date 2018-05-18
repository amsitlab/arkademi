<?php

function generateSerialNum()
{

	return implode('-', str_split(substr(strtoupper(md5(microtime().rand(1000, 9999))), 0, 16), 4));
	

}


for($i=1; $i<=300; $i++){
	echo "\n";
 	echo $i . ") " . generateSerialNum();
}
?>
