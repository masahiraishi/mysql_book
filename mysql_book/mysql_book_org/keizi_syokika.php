<?php
require_once("data/db_info.php");
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

$s->query("DELETE FROM tbj0");
$s->query("DELETE FROM tbj1");
$s->query("ALTER TABLE tbj0 AUTO_INCREMENT=1");
$s->query("ALTER TABLE tbj1 AUTO_INCREMENT=1");

print "ＳＱＬカフェのテーブルを初期化しました";
?>
