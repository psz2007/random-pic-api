<?php
	$list = "list.json";
	if(!file_exists($list)){
		die('list error');
	}
	$file = file_get_contents($list);
	$pics = json_decode($file);
	$pic = 'https://raw.githubusercontent.com/psz2007/random-pic/main/' . $pics[array_rand($pics)];
	die(header('Location: $pic'));
?>
