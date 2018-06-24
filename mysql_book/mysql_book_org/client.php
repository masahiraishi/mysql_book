<?php
print "あなたのIPアドレスは:";
print getenv("REMOTE_ADDR");
print "<br>";
print "あなたのホスト名は:";
print gethostbyaddr(getenv("REMOTE_ADDR"));
print "<br>";
print "あなたのブラウザは:";
print getenv("HTTP_USER_AGENT");
print "<br>ですね";
?>