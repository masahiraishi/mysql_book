<?php
for($i=0;$i<=30;$i++){
	print date("Y/m/d (l)",strtotime("now +$i day"));
	print "<br>";
}
?>