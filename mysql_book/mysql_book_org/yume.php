<?php
print <<<eof1
   <html>
      <head>
         <title>ＳＱＬカフェのページ</title>
      </head>
      <body style='background-color:gray'>
	  <span style='color:indigo;font-size:35pt'>
	  ＳＱＬカフェにようこそ！
	  </span>
      <img src='boy.gif' alt="男子のイラスト">
eof1;

print "<p style='color:red;font-size:24'>";
for($i=1;$i<=15;$i=$i+1){
	print "＊";
}
print "<br>";
$m[0]="　　　　　　　眠くないですか";
$m[1]="　　　　　　　おはようございます";
$m[2]="　　　　　　　こんにちは";
$m[3]="　　　　　　　こんばんは";
if (date("G")>=18){
	print $m[3];
}elseif(date("G")>=9){
	print $m[2];
}elseif(date("G")>=6){
	print $m[1];
}else{
	print $m[0];
}
print "<br>　　今日は".date("Y")."年".date("m")."月".date("j")."日です<br>";
$i=1;
while($i<=15){
	print "＊";
	$i++;
}
print "<br><div>";
print "あなたのIPアドレスは　　";
print getenv('REMOTE_ADDR');
print "</div><div>";
print "あなたのホスト名は　　　";
print gethostbyaddr(getenv('REMOTE_ADDR'));
print "</div><div>";
print "あなたのブラウザは　　　";
print getenv('HTTP_USER_AGENT');
print "</div>ですね<hr>";

print "<form action='uke.php' method='post'>";
print "メッセージを送ってください。ひたすら山彦になります。";
print "<div><input type='text' name='a'></div>";
print "<input TYPE='submit' value='送信'>";
print "</form>";
?>