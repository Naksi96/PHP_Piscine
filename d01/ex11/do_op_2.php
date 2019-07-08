#!/usr/bin/php
<?PHP
function do_op($a, $op, $b)
{
	if ($op === "+")
		echo ($a + $b)."\n";
	else if ($op === "-")
		echo ($a - $b)."\n";
	else if ($op === "*")
		echo ($a * $b)."\n";
	else if ($op === "/")
		echo ($a / $b)."\n";
	else if ($op === "%")
		echo ($a % $b)."\n";
	else
		echo "Syntax Error\n";
}
if ($argc == 2)
{
	$calc = str_replace(" ", "", $argv[1]);
	$x = intval($calc);
	$xpos = substr($calc, strlen($x));
	$oper = substr($xpos, 0, 1);
	$y = substr($xpos, 1);
	if (!is_numeric($x) || !is_numeric($y))
	{
		echo "Syntax Error\n";
		exit();
	}
	do_op($x, $oper, $y);
}
else
	echo "Incorrect Parameters\n";
?>