<?php
	try {
		$curl = curl_init();
		$url = "https://raw.githubusercontent.com/psz2007/random-pic/main/list.json";
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);
		$file = curl_exec($curl);
		if($e = curl_error($curl)) {
			die($e);
		} else {
			$pics = json_decode($file);
		}
		$pic = 'https://raw.githubusercontent.com/psz2007/random-pic/main/' . $pics[array_rand($pics)];
		die(header('Location: $pic'));
	} catch (Exception $e) {
		die($e);
	}
?>
