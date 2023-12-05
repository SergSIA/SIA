<?php
$dalTableadvisor = array();
$dalTableadvisor["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableadvisor["fk_id_people"] = array("type"=>20,"varname"=>"fk_id_people", "name" => "fk_id_people");
$dalTableadvisor["fk_id_specialty"] = array("type"=>3,"varname"=>"fk_id_specialty", "name" => "fk_id_specialty");
$dalTableadvisor["created_by"] = array("type"=>20,"varname"=>"created_by", "name" => "created_by");
$dalTableadvisor["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
$dalTableadvisor["updated_by"] = array("type"=>20,"varname"=>"updated_by", "name" => "updated_by");
$dalTableadvisor["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at");
$dalTableadvisor["status"] = array("type"=>11,"varname"=>"status", "name" => "status");
$dalTableadvisor["commission"] = array("type"=>14,"varname"=>"commission", "name" => "commission");
	$dalTableadvisor["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_advisor"] = &$dalTableadvisor;
?>