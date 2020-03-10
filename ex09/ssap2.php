#!/usr/bin/php
<?PHP

function	cmp($a, $b)
{
	if ($a == $b)
	{
		return 0;
	}
	$charsa = str_split($a);
	$charsb = str_split($b);
	$i = 0;
	while($charsa[$i] && $charsb[$i])
	{
		$asciia = ord($a[$i]);
		$asciib = ord($b[$i]);
		if ($asciia >= 97 && $asciia <= 122)
			$asciia += 0;
		else if ($asciia >= 65 && $asciia <= 90)
			$asciia += 32;
		else if ($asciia >= 48 && $asciia <= 57)
			$asciia += 200;
		else
			$asciia += 400;
		if ($asciib >= 97 && $asciib <= 122)
			$asciib += 0;
		else if ($asciib >= 65 && $asciib <= 90)
			$asciib += 32;
		else if ($asciib >= 48 && $asciib <= 57)
			$asciib += 200;
		else
			$asciib += 400;
		if ($asciia < $asciib)
			return -1;
		if ($asciib < $asciia)
			return 1;
		$i++;
	}
	if (!$charsa[$i] && !$charsb[$i])
		return 0;
	if (!$charsa[$i])
		return -1;
	else
		return 1;
}

if			($argc > 1)
{
	$arr = $argv;
	array_shift($arr);
	$line = implode(" ", $arr);
	$line = trim($line);
	$arr = explode(" ", $line);
	$arr = array_filter($arr);
	usort($arr, "cmp");
	$line = implode("\n", $arr);
	echo "$line\n";
}
?>
