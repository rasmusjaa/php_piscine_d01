#!/usr/bin/php
<?PHP
if ($argc == 4)
{
	$nb1 = preg_replace('/( |\t)+/', '', $argv[1]);
	$nb2 = preg_replace('/( |\t)+/', '', $argv[3]);
	echo "$nb1 and $nb2\n";
	$op = trim($argv[2]);
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
