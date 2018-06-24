<?php
$s=new PDO("mysql:host=localhost;dbname=db1","root","root");
print "接続OK！<br>";
$s->query("INSERT INTO tb1 VALUES('K888','エスキュー花子',25)");
$re=$s->query("SELECT * FROM tb1");
while($kekka=$re->fetch()){
	print $kekka[0];
	print ":";
	print $kekka[1];
	print ":";
	print $kekka[2];
	print "<br>";
}
?>