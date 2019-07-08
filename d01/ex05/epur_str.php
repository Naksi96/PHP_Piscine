#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$checker = array_filter(explode(" ", trim($argv[1])));
	$i = 0;
	foreach ($checker as $str)
	{
		echo $str;
		if ($i + 1 < count($checker))
			echo " ";
		$i++;
	}
	echo "\n";
}
?>