<?php
$s=new PDO("mysql:host=localhost;dbname=db1","root","root");

$c1_d=$_POST["c1"];

$re=$s->query("SELECT * FROM tbk WHERE mess LIKE '%$c1_d%'");
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