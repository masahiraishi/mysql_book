<?php
if (date("G")>=18){
	print "こんばんは";
}elseif(date("G")>=9){
	print "こんにちは";
}elseif(date("G")>=6){
	print "おはようございます";
}else{
	print "眠くないですか";
}
?>