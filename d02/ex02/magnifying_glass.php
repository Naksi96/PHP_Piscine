#!/usr/bin/php
<?PHP
if ($argc == 2)
{
    $fd = fopen($argv[1], 'r');
    while (!feof($fd))
    {
        $line = fgets($fd);
        $line = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches){
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));}, $line);
        $line = preg_replace_callback('/<a.*?>(.*?)</', function ($matches){
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));}, $line);
        echo $line;
    }
    fclose($fd);
}
?>