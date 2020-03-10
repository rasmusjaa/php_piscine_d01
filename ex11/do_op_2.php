#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$line = trim($argv[1]);
	$arr = str_split($line);
	foreach($arr as $char)
	{
		if (in_array($char, array('+', '-', '*', '/', '%')))
		{
			$op = $char;
			break ;
		}
	}
	if (!isset($op))
		exit("Syntax Error\n");
	$line = implode("", $arr);
	$arr = explode($op, $line);
	if (count($arr) != 2)
		exit("Syntax Error\n");
	$nb1 = trim($arr[0]);
	$nb2 = trim($arr[1]);
	if (!is_numeric($nb1) || !is_numeric($nb2))
		exit("Syntax Error\n");
	if ($nb2 == 0 && ($op == "/" || $op == "%"))
		exit("Division by 0 error\n");
	if ($op == "+")
		$nb = $nb1 + $nb2;
	else if ($op == "-")
		$nb = $nb1 - $nb2;
	else if ($op == "*")
		$nb = $nb1 * $nb2;
	else if ($op == "/")
		$nb = $nb1 / $nb2;
	else if ($op == "%")
		$nb = $nb1 % $nb2;
	echo $nb."\n";
}
else
	exit("Incorrect Parameters\n");
?>
