#!/usr/bin/php
<?PHP
if ($argc > 1)
    echo trim(preg_replace("/\s+/", " ", $argv[1]))."\n";
?>