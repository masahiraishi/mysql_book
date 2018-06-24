<?php
$s=new PDO("mysql:host=localhost;dbname=db1","root","root");

$q=<<<eot
SELECT bang,AVG(uria)
	FROM tb
WHERE uria>=50
	GROUP BY bang
HAVING AVG(uria)>=120
	ORDER BY AVG(uria) DESC;
eot;

$re=$s->query($q);
while($kekka=$re->fetch()){
	print "社員番号：";
	print $kekka[0];
	print "　売上平均：";
	print $kekka[1];
	print "<br>";
}
?>