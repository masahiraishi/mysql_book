<?php
$s=new PDO("mysql:host=localhost;dbname=db1","root","root");
$a1_d=$_POST["a1"];
$a2_d=$_POST["a2"];
$s->query("INSERT INTO tbk (nama,mess) VALUES ('$a1_d','$a2_d')");
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