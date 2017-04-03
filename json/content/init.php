<?php

@error_reporting(E_ALL | E_NOTICE | E_ERROR | E_WARNING | E_PARSE | E_CORE_ERROR | E_CORE_WARNING);
@ini_set('max_execution_time', 0);
@set_time_limit(0); // отключение лимита на время работы скрипта
@ini_set('memory_limit', '1024M');

$CONFIG = array(
	'api_key' => '3987aef246c728f5185c874aeaae7b49',
	'api_url' => 'https://zenit.stroycrm.ru/api/v1/',
	'data_dir' => './data/',
);

function getPHPversion()
{
	$version = explode('.', phpversion());
	return $version[0] + round($version[1] / 10, 1);
}

function getJSON_prepareUTF($matches)
{
	return json_decode('"'.$matches[1].'"');
}

function getJSON($_a = array()) // arr2json
{
	$a = &$_a;
	
	if(getPHPversion() > 5.3) {
		return json_encode($a, JSON_UNESCAPED_UNICODE);
	} else {
		return stripslashes(preg_replace_callback('/((\\\u[01-9a-fA-F]{4})+)/', 'getJSON_prepareUTF', json_encode($a)));
	}
}

function parseJSON($j)
{
	return json_decode($j, true);
}

function getURL($url = '', $p = array()){
	
	global $CONFIG;
	
	$p_str = '';
	
	if(count($p)) {
		
		$p_str = '&' . http_build_query($p);
		
	}
	
	return $CONFIG['api_url'] . $url . '/?api_key=' . $CONFIG['api_key'] . '&format=json' . $p_str;
	
}

function makePath($path) {
	
	global $CONFIG;
	
	$path = $CONFIG['data_dir'] . $path;
	
	if(file_exists($path)) {
		
	} else {
		@mkdir($path, 0777, true);
	}
	
	return $path;
	
}

function download($url, $p = array()) {
	
	$dir_path = makePath($url);
	$data = file_get_contents(getURL($url, $p));
	
	$fp = fopen($dir_path . '/data.json', 'w');
	fwrite($fp, $data);
	fclose($fp);
	
	return parseJSON($data);
	
}
