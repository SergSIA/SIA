<?php
$dalTablerole = array();
$dalTablerole["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablerole["description"] = array("type"=>200,"varname"=>"description", "name" => "description");
	$dalTablerole["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_role"] = &$dalTablerole;
?>