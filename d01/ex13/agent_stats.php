#!/usr/bin/php
<?PHP
if ($argc != 2)
	exit();
$stdin = fopen('php://stdin', 'r');
$line = array();
$user = array();
fgets($stdin);
while ($stdin && !feof($stdin))
{
	$stat = explode(";", fgets($stdin));
	if (count($stat) === 4)
	{
		$line[] = $stat;
		if (!array_key_exists($stat[0], $user))
		{
			$user[$stat[0]] = null;
			$user[$stat[0]]['sum'] = 0;
			$user[$stat[0]]['repeat'] = 0;
			$user[$stat[0]]['mouli'] = 0;
		}
	}
}
ksort($user);
if ($argv[1] === "average")
{
	$tot = 0;
	$count = 0;
	foreach ($line as $c)
	{
		if ($c[2] !== "moulinette" && $c[1] !== "")
		{
			$count++;
			$tot += $c[1];
		}
	}
	echo ($tot / $count)."\n";
}
else if ($argv[1] === "average_user" || $argv[1] === "moulinette_variance")
{
	foreach ($line as $c)
	{
		if ($c[1] !== "" && $c[2] !== "moulinette")
		{
			$user[$c[0]]['repeat']++;
			$user[$c[0]]['sum'] += $c[1];
		}
		else if ($c[2] === "moulinette")
			$user[$c[0]]['mouli'] = $c[1];
	}
	if ($argv[1] === "average_user")
	{
		foreach ($user as $key => $calc)
			echo $key.":".($calc['sum']/$calc['repeat'])."\n";
	}
	else
	{
		foreach ($user as $key => $calc)
			echo $key.":".(($calc['sum']/$calc['repeat']) - $calc['mouli'])."\n";
	}
}
?>