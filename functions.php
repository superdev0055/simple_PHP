<?php

function getUsers($json_path){
	$json = file_get_contents($json_path);
  	$json = json_decode($json, true);
  	return $json;
}

function getUser($users, $id){
	for($i = 0; $i < count($users); $i++){
		if ($users[$i]['id'] == $id) {
			return $i;
		}
	}
}