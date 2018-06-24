<?php
$m=array("眠くないですか","おはようございます","こんにちは","こんばんは");
if (date("G")>=18){
	print $m[3];
}elseif(date("G")>=9){
	print $m[2];
}elseif(date("G")>=6){
	print $m[1];
}else{
	print $m[0];
}
?>