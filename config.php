<?php
$sources = [
	'bus' => [
		'gtfsrt' => 'ftp://ztp.krakow.pl/VehiclePositions_A.pb',
		'gtfsrt_file' => 'VehiclePositions_A.pb',
		'ttss' => 'http://ttss.mpk.krakow.pl/internetservice/geoserviceDispatcher/services/vehicleinfo/vehicles',
		'ttss_file' => 'vehicles_A.json',
		'database' => 'mapping_A.sqlite3',
		'result' => 'mapping_A.json',
		'mapper' => 'numToTypeB',
	],
	'tram' => [
		'gtfsrt' => 'ftp://ztp.krakow.pl/VehiclePositions_T.pb',
		'gtfsrt_file' => 'VehiclePositions_T.pb',
		'ttss' => 'http://www.ttss.krakow.pl/internetservice/geoserviceDispatcher/services/vehicleinfo/vehicles',
		'ttss_file' => 'vehicles_T.json',
		'database' => 'mapping_T.sqlite3',
		'result' => 'mapping_T.json',
		'mapper' => 'numToTypeT',
	],
	'tram2' => [
		'gtfsrt' => 'ftp://ztp.krakow.pl/VehiclePositions.pb',
		'gtfsrt_file' => 'VehiclePositions_T.pb',
		'ttss' => 'http://www.ttss.krakow.pl/internetservice/geoserviceDispatcher/services/vehicleinfo/vehicles',
		'ttss_file' => 'vehicles_T.json',
		'database' => 'mapping_T.sqlite3',
		'result' => 'mapping_T.json',
		'mapper' => 'numToTypeT',
	],
]; 

foreach($sources as $name => &$source) {
	foreach(['gtfsrt_file', 'ttss_file', 'database', 'result'] as $field) {
		$source[$field] = __DIR__.'/data/'.$source[$field];
	}
	$source['result_temp'] = $source['result'].'.tmp';
}
unset($source);