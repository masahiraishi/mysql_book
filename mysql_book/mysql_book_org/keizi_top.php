<?php

/***************　データベース情報等の読み込み　***************/
require_once("data/db_info.php");

/***************　データベースへ接続、データベース選択　***************/
$s=new pdo("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/***************　タイトル、画像等の表示　***************/
print <<<eot1
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>ＳＱＬカフェのページ</title>
	</head>
	<body style="background-color:silver">
	<img src="pic/jk.gif" alt="女子のイラスト">
	<span style="color:purple;font-size:35pt">
	ＳＱＬカフェ掲示板だよ
	</span>

	<p>見たいスレッドの番号をクリックしてください</p>
	<hr>
	<div style="font-size:20pt">（スレッド一覧）</div>
eot1;

/***************　クライアントIPアドレス取得　***************/
$ip=getenv("REMOTE_ADDR");

/***************　スレッド名の変数$su_dにデータがあればtbj0に挿入　***************/
$su_d=isset($_GET["su"])? htmlspecialchars($_GET["su"]):null;
if($su_d<>""){
	$s->query("INSERT INTO tbj0 (sure,niti,aipi) VALUES ('$su_d',now(),'$ip')");
}

$re=$s->query("SELECT * FROM tbj0");
while($kekka=$re->fetch()){
print <<<eot2
	<a href="keizi.php?gu=$kekka[0]">$kekka[0] $kekka[1]</a>
	<br>
	$kekka[2]作成<br><br>
eot2;
}

/***************　スレッド作成フォーム、検索ページへのリンク　***************/
print <<<eot3
	<hr>
	<div style="font-size:20pt">（スレッド作成）</div>
	新しくスレッドを作るときは、ここでどうぞ！
	<br>
	<form method="GET" action="keizi_top.php">
	新しく作るスレッドのタイトル
	<input type="text" name="su" size="50">
	<div><input type="submit" value="作成"></div>
	</form>
	<hr>
	<span style="font-size:20pt">（メッセージ検索）</span>
	<a href="keizi_search.php">検索するときはここをクリック</a>
	<hr>
	</body>
	</html>
eot3;
?>