<?php
for($x=1;$x<=8;$x++){
	for($y=1;$y<=5;$y++){
		switch($y){
		case 1:
			print "◎";
			break;
		case 2:
			print "★";
			break;
		case 3:
			print "○";
			break;
		case 4:
			print "▽";
			break;
		case 5:
			print "▲";
			break;
		}
	}
}