#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$line = trim($argv[1]);
	$arr = explode(" ", $line);
	$arr = array_filter($arr);
	$line = implode(" ", $arr);
	echo $line."\n";
}
?>
