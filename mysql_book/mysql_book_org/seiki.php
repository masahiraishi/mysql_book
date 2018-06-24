<?php
$m="107-0052";
if(preg_match("/^[0-9]{3}-[0-9]{4}$/",$m)){
	print "とりあえずOKです";
}else{
	print "誤りがあります";
}
?>