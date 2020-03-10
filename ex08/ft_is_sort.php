#!/usr/bin/php
<?PHP
function ft_is_sort($arr)
{
	if (is_array($arr))
	{
		$copy = $arr;
		sort($copy);
		foreach($copy as $key => $value)
		{
			if ($value != $arr[$key])
				return false;
		}
		return true;
	}
}
?>
