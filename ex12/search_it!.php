#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$match = $argv[1];
	if ($argc > 2)
	{
		$arr = $argv;
		array_shift($arr);
		array_shift($arr);
		foreach($arr as $key => $value)
		{
			$temp = explode(":", $value);
			if (count($temp) == 2 && $temp[0] === $match)
				$found = $temp[1];
		}
		if (isset($found))
			echo "$found\n";
	}
}
?>
