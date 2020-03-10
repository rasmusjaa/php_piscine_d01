#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$line = $argv[1];
	$line = trim($line);
	$arr = explode(" ", $line);
	$arr = array_filter($arr);
	$temp = array_shift($arr);
	array_push($arr, $temp);
	$line = implode(" ", $arr);
	echo "$line\n";
}
?>
