<?php

/***************　データベース情報等の読み込み　***************/
require_once("data/db_info.php");

/***************　データベースへ接続、データベース選択　***************/
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/***************　スレッドグループ番号(gu)を取得し$gu_dに代入　***************/
$gu_d=$_GET["gu"];

/***************　$gu_dに数字以外が含まれていたら処理を中止　***************/
if(preg_match("/[^0-9]/",$gu_d)){
print <<<eot1
	不正な値が入力されています<BR>
	<a href="keizi_top.php">ここをクリックしてスレッド一覧に戻ってください</a>
eot1;

/***************　$gu_dに数字以外が含まれていない、正常な値での処理　***************/
}elseif(preg_match("/[0-9]/",$gu_d)){

/***************　名前とメッセージを取得してタグを削除　***************/
$na_d=isset($_GET["na"])?htmlspecialchars($_GET["na"]):null;
$me_d=isset($_GET["me"])?htmlspecialchars($_GET["me"]):null;

/***************　IPアドレス取得　***************/
$ip=getenv("REMOTE_ADDR");

/***************　スレッドグループ番号(gu)に一致するレコードを表示　***************/
$re=$s->query("SELECT sure FROM tbj0 WHERE guru=$gu_d");
$kekka=$re->fetch();

/***************　スレッド内容の表示文字列$sure_comを作成　***************/
$sure_com="「".$gu_d." ".$kekka[0]."」";

/***************　スレッド表示のタイトル等書き出し　***************/
print <<<eot2
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>ＳＱＬカフェ $sure_com スレッド</title>
	</head>
	<body style="background-color:silver">
	<div style="color:purple;font-size:35pt">
	$sure_com スレッド！
	</div>
	<br>
	<div style="font-size:18pt">$sure_com のメッセージ</div>
eot2;

/***************　名前（$na_d）が入力されていればtbj1にレコード挿入　***************/
if($na_d<>""){
   $re=$s->query("INSERT INTO tbj1 VALUES (0,'$na_d','$me_d',now(),$gu_d,'$ip')");
}

/***************　水平線表示　***************/
print "<hr>";

/***************　日時の順にレスデータを表示　***************/
$re=$s->query("SELECT * FROM tbj1 WHERE guru=$gu_d ORDER BY niti");

$i=1;
while($kekka=$re->fetch()){

print "$i($kekka[0]):$kekka[1]:$kekka[3] <br>";
print nl2br($kekka[2]);
print "<br><br>";
	$i++;
}


print <<<eot3
	<hr>
	<div style="font-size:18pt">
	$sure_com にメッセージを書くときはここにどうぞ
	</div>
	<form method="GET" action="keizi.php">
	<div>名前　<input type="text" name="na"></div>
	メッセージ
	<div>
	<textarea name="me" rows="10" cols="70"></textarea>
	</div>
	<input type="hidden" name="gu" value=$gu_d>
	<input type="submit" value="送信">
	</form>
	<hr>
	<a href="keizi_top.php">スレッド一覧に戻る</a>
	</body>
	</html>
eot3;

/***************　$gu_dに数字以外も、数字も含まれていないときの処理　***************/
}else{
   print "スレッドを選択してください。<br>";
   print "<a href='keizi_top.php'>ここをクリックしてスレッド一覧に戻ってください</a>";
}

?>
