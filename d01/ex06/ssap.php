#!/usr/bin/php
<?PHP
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
		sort($arr);
		echo implode("\n", $arr)."\n";
	}
?>