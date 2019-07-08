#!/usr/bin/php
<?PHP
function do_op($a, $op, $b)
{
    if ($op === "+")
        return ($a + $b);
    if ($op === "-")
        return ($a - $b);
    if ($op === "*")
        return ($a * $b);
    if ($op === "/")
        return ($a / $b);
    if ($op === "%")
        return ($a % $b);
    return (0);
}
if ($argc == 4)
{
    echo do_op(trim($argv[1]), trim($argv[2]), trim($argv[3]))."\n";
}
else
    echo "Incorrect Parameters\n";
?>