#!/usr/bin/env php
<?php

require_once('init.php');

$buildings = download('buildings');

sleep(1);

if(count($buildings['results'])) {
	foreach($buildings['results'] as $b) {
		
		if($b['id'] == 12) {
			
			$b_uid = 'buildings/' . $b['id'];
			
			$b_p_data = array(
				'points' => array(),
				//'flat' => array(),
				'floor' => array(),
				'number' => array(),
				'flat_number' => array(),
				'layout' => array(),
				//'rooms_width' => array(),
				//'lay_num' => array(),
				'layouts' => array(),
			);
			
			$b_data = download($b_uid);
			
			if(count($b_data['buildingsections'])) {
				
				foreach($b_data['buildingsections'] as $s) {
					
					download('building-sections/' . $s['id']);
					
					if(count($s['points'])) {
						
						foreach($s['points'] as $p) {
							
							download('points/' . $p['id']);
							
							$b_p_data['points'][$p['id']] = $p;
							
							//$b_p_data['flat'][$p['flat']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							$b_p_data['floor'][$p['floor']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							$b_p_data['number'][$p['number']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							$b_p_data['flat_number'][$p['flat_number']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							$b_p_data['layout'][$p['layout']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							//$b_p_data['rooms_width'][$p['rooms_width']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							//$b_p_data['lay_num'][$p['lay_num']][] = $p['id'];//&$b_p_data['points'][$p['id']];
							
							sleep(1);
							
						}
						
					}
					
				}
				
			}
			
			if(count($b_p_data['layout'])) {
				foreach($b_p_data['layout'] as $i => $l) {
					$b_p_data['layouts'][$i] = download('layouts/' . $i);
					sleep(1);
				}
			}
			
			$fp = fopen(__DIR__ . '/houseData.' . $b['id'] . '.json', 'w');
			fwrite($fp, getJSON($b_p_data));
			fclose($fp);
			
		}
		
		//sleep(1);
		
	}
}