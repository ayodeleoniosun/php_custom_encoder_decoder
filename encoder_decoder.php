<?php


public static function encoder($name){
	$trans = array("a"=>"l", "l"=>"a", "b"=>"z", "z"=>"b", "d"=>"x", "x"=>"d", "g"=>"h", "h"=>"g", "j"=>"m", "m"=>"j","n"=>"o", "o"=>"n", "q"=>"r", "r"=>"q", "s"=>"y", "y"=>"s", "u"=>"v", "v"=>"u", "0"=>"2", "2"=>"0", "4"=>"1", "1"=>"4", "8"=>"6", "6"=>"8","9"=>"3", "3"=>"9");
	$namer = base64_encode(strtr($name, $trans));
	return ($namer);
}
	
public static function decoder($namer){
	$untrans = array("a"=>"l", "l"=>"a", "b"=>"z", "z"=>"b", "d"=>"x", "x"=>"d", "g"=>"h", "h"=>"g", "j"=>"m", "m"=>"j","n"=>"o", "o"=>"n", "q"=>"r", "r"=>"q", "s"=>"y", "y"=>"s", "u"=>"v", "v"=>"u", "0"=>"2", "2"=>"0","4"=>"1", "1"=>"4", "8"=>"6","6"=>"8", "9"=>"3", "3"=>"9");
	$namers = (base64_decode($namer));
	$unamer = strtr($namers, $untrans);
	return $unamer;
}

//just call the function when needed

?>