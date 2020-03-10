#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$line = trim($str);
	$arr = explode(" ", $str);
	$arr = array_filter($arr);
	sort($arr);
	return $arr;
}
?>
