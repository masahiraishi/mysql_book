<?php
try{
	$s=new PDO("mysql:host=localhost;dbname=db1","root","root");
	$s->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	print "接続OK！<br>";
	$s->query('INSERT INTO tb1 VALUES("K888","エスキュー花子",555)');
	$re=$s->query("SELECT * FROM tb_bad");
	while($kekka=$re->fetch()){
	print $kekka[0];
	print " : ";
	print $kekka[1];
	print " : ";
	print $kekka[2];
	print "<br>";
	}
}catch(PDOException $e){
	print "次がエラーの内容です：" .$e->getMessage();
}
?>