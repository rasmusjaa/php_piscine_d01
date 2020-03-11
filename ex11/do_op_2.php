#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$line = preg_replace('/( |\t)+/', "", trim($argv[1]));
	$pattern = '/([-+]?[0-9]+)([+\-*\/%])([-+]?[0-9]+)/';
	preg_match_all($pattern, $line, $matches, PREG_SET_ORDER);
	if ($matches[0][0] === $line && count($matches[0]) === 4)
	{
		$op = $matches[0][2];
		$nb1 = $matches[0][1];
		$nb2 = $matches[0][3];
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
		exit("Syntax Error\n");
}
else
	exit("Incorrect Parameters\n");
?>
