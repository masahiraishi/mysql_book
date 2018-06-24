<?php

/***************　データベース情報等の読み込み　***************/
require_once("data/db_info.php");

/***************　データベースへ接続、データベース選択　***************/
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/***************　タイトル等の表示　***************/
print <<<eot1
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
	<title>ＳＱＬカフェ 検索のページ</title>
	</head>
	<body style="background-color:aqua">
	<hr>
	<div style="font-size:18pt">（検索結果はこちらに）</div>
eot1;

/***************　検索文字列を取得してタグを削除　***************/
$se_d=isset($_GET["se"])?htmlspecialchars($_GET["se"]):null;

/***************　検索文字列($se_d)にデータがあれば検索処理　***************/
if($se_d<>""){

/***************　検索のSQL文　テーブルtbj1にtbj0を結合　***************/
$str=<<<eot2
	SELECT tbj1.bang,tbj1.nama,tbj1.mess,tbj0.sure
		FROM tbj1 
	JOIN tbj0 
	ON
		tbj1.guru=tbj0.guru 
	WHERE tbj1.mess LIKE "%$se_d%"
eot2;

/***************　検索クエリを実行　***************/
   $re=$s->query($str);
   while($kekka=$re->fetch()){
      print " $kekka[0] : $kekka[1] : $kekka[2] ( $kekka[3] )";
      print "<br><br>";
   }
}

/***************　検索文字列入力用表示、トップへのリンク　***************/
print <<<eot3
	<hr>
	<div>メッセージに含まれる文字を入力してください！</div>
	<form method="GET" action="keizi_search.php">
	検索する文字列
	<input type="text" name="se">
	<div>
	<input type="submit" value="検索">
	</div>
	</form>
	<br>
	<a href="keizi_top.php">スレッド一覧に戻る</a>
	</body>
	</html>
eot3;
?>
