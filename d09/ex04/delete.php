<?php
	foreach ($_GET as $key => $value) {
		$file = file_get_contents('list.csv');
		$arr = explode("\n", $file);
		foreach ($arr as $val) {
			$new = explode(";", $val);
			if ($new[1] == $value) {
				$data = $new[1] . ";" . $new[1] . PHP_EOL;
				file_put_contents('list.csv', str_replace($data, '', $file));
			}
		}
	}
?>
