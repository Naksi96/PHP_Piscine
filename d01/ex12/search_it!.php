#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$i = 2;
	$key = $argv[1];
	$val = "";
	while ($i < $argc)
	{
		$tmp = explode(":", $argv[$i]);
		if ($tmp[0] === $key)
			$val = $tmp[1];
		$i++;
	}
	if ($val)
		echo $val."\n";
}
?>