<?php
try{
	$s=new PDO("mysql:host=localhost;dbname=db1","root","nisepass");
	print "成功しました";
}catch(PDOException $e){
	print "次がエラーの内容です：".$e->getMessage();
}
?>