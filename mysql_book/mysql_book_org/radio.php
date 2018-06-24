<form method="POST" action="radio_uke.php">
あなたの年齢を選択して、送信ボタンをクリックしてください。<br>

<?php
$i=1;
$c=1;
print "<div>";
while($i<=100){
print "<input type='radio' name='r' value='$i'>$i ";
if($c==10){
print "</div><div>";
$c=0;
}
$i++;
$c++;
}
?>

<input type="submit" value="送信">
</div>
</form>