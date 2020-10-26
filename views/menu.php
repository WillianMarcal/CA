<?php
	$menu = [
		[
			"diretorio" => "index",
			"text" => "Student"
		],
		[
			"diretorio" => "countries",
			"text" => "Countries"
		],
		[
			"diretorio" => "search-for-countries",
			"text" => "Search for Countries"
		]	
	];

	function activeLink($path) {
		$url = str_replace('/', '', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
		$path = trim($path);
		return $path == $url ? 'active' : '';
	}
?>