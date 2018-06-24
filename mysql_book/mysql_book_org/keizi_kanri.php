<?php

/***************　データベース情報等の読み込み　***************/
require_once("data/db_info.php");

/***************　データベースへ接続、データベース選択　***************/
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/***************　テーブルtbj1をSELECT　***************/
$re=$s->query("SELECT * FROM tbj1 ORDER BY niti");

/***************　クエリの結果書き出し　***************/
$i=1;
while($kekka=$re->fetch()){
	print "$i($kekka[0]):$kekka[1]:$kekka[3] GP:$kekka[4] IP:$kekka[5]<BR>";
	print nl2br($kekka[2]);
	print "<br><br>";
	$i++;
}

?>
