#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$str = array_filter(explode(" ", trim($argv[1])));
	$tmp = $str[0];
	unset($str[0]);
	array_push($str, $tmp);
	echo implode(" ", $str)."\n";
}
?>