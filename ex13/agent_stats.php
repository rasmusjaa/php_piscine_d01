#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$total = 0;
	$times = 0;
	$users = array();
	while ($line = fgets(STDIN))
	{
		$user = explode(";", $line);
		if ($user[2] !== "moulinette" && is_numeric($user[1]))
		{
			$total += $user[1];
			$times++;
		}

		$user['count'] = 0;
		$user['total'] = 0;
		$user['moulinette'] = 0;

		if ($user[2] === "moulinette" && is_numeric($user[1]))
			$user['moulinette'] = $user[1];
		else if (is_numeric($user[1]))
		{
			$user['total'] = $user[1];
			$user['count'] = 1;
		}

		$key = array_search($user[0], array_column($users, 0));

		if ($key === FALSE)
			array_push($users, $user);
		else
		{
			$users[$key]['count'] += $user['count'];
			$users[$key]['total'] += $user['total'];
			$users[$key]['moulinette'] += $user['moulinette'];
		}
	}
	array_shift($users);
	sort($users);

	if ($argv[1] === "average")
	{
		if ($times > 0)
			$total /= $times;
		echo "$total\n";
	}
	else if ($argv[1] === "average_user")
	{
		foreach($users as $key => $user)
		{
			$average = $user['count'] !== 0 ? $user['total']/$user['count'] : 0;
			echo $user[0].":".$average."\n";
		}
	}
	else if ($argv[1] === "moulinette_variance")
	{
		foreach($users as $key => $user)
		{
			$average = $user['count'] !== 0 ? $user['total']/$user['count'] : 0;
			$diff = $average - $user['moulinette'];
			echo $user[0].":".$diff."\n";
		}
	}

}
?>
