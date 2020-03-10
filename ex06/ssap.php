#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$rev = $argv;
	krsort($rev);
	array_pop($rev);
	$line = implode(" ", $rev);
	$line = trim($line);
	$arr = explode(" ", $line);
	$arr = array_filter($arr);
	sort($arr);
	$line = implode("\n", $arr);
	echo "$line\n";
}
?>
