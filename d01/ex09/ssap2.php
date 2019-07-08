#!/usr/bin/php
<?PHP
function ft_sort($x, $y)
{
	$lx = strtolower($x);
	$ly = strtolower($y);
	$i = 0;
	$order = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($x)) || ($i < strlen($y)))
	{
		$xpos = strpos($order, $lx[$i]);
		$ypos = strpos($order, $ly[$i]);
		if ($xpos > $ypos)
			return (1);
		else if ($xpos < $ypos)
			return (-1);
		else
			$i++;
	}
}

function ft_split($string)
{
	$tmp = array_filter(explode(" ", "$string"));
	sort($tmp);
	return $tmp;
}
if ($argc >= 2)
{
	$i = 1;
	$arr = array();
	while($i < $argc)
	{
		$tmp = ft_split($argv[$i]);
		$ret = array_merge($arr, $tmp);
		$arr = $ret;
		$i++;
	}
	usort($arr, 'ft_sort');
	echo implode("\n", $arr)."\n";
}
?>