<?php
$s=new pdo("mysql:host=localhost;dbname=db1","root","root");
$re=$s->query("SHOW TABLES");
while($kekka=$re->fetch()){
	print $kekka[0];
	print "<br>";
}
?>
	