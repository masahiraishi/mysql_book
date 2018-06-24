<?php
$s=new PDO("mysql:host=localhost;dbname=db1","root","root");

$b1_d=$_POST["b1"];

$s->query("DELETE FROM tbk WHERE bang=$b1_d");
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