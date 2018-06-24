<?php

/***************　データベースへ接続、データベース選択　***************/
$s=new PDO("mysql:host=localhost;dbname=db1","root","root");

/***************　nameがhのvalueを変数$h_dに代入　***************/
$h_d=$_POST["h"];

/***************　$h_dがsel、ins、del、serのどれかで条件分岐　***************/

switch("$h_d"){
	case "sel":
		$re=$s->query("SELECT * FROM tbk ORDER BY bang");
		break;
	case "ins":
		$a1_d=$_POST["a1"];
		$a2_d= $_POST["a2"];
		$s->query("INSERT INTO tbk (nama,mess) VALUES ('$a1_d','$a2_d')");
		$re=$s->query("SELECT * FROM tbk ORDER BY bang");
		break;
	case "del":
		$b1_d=$_POST["b1"];
		$s->query("DELETE FROM tbk WHERE bang=$b1_d");
		$re=$s->query("SELECT * FROM tbk ORDER BY bang");
		break;
	case "ser":
		$c1_d=$_POST["c1"];
		$re=$s->query("SELECT * FROM tbk WHERE mess LIKE '%$c1_d%' ORDER BY bang");
		break;
}

/***************　クエリの結果を表示　***************/
while($kekka=$re->fetch()){
	print $kekka[0];
	print " : ";
	print $kekka[1];
	print " : ";
	print $kekka[2];
	print "<br>";
}
/***************　トップページへのリンク　***************/
print "<br><a href='kantan2.html'>トップメニューに戻ります</a>";
?>