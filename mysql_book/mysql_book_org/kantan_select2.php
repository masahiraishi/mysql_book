<?php
require_once("data/db_info.php");
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

$re=$s->query("SELECT * FROM tbk ORDER BY bang");
while($kekka=$re->fetch()){
	print $kekka[0];
	print " : ";
	print $kekka[1];
	print " : ";
	print $kekka[2];
	print "<br>";
}

print "<br><a href='kantan.html'>トップメニューに戻ります</a>";
?>