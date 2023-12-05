<?php
$dalTablecustomers = array();
$dalTablecustomers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecustomers["fk_id_people"] = array("type"=>20,"varname"=>"fk_id_people", "name" => "fk_id_people");
$dalTablecustomers["created_by"] = array("type"=>20,"varname"=>"created_by", "name" => "created_by");
$dalTablecustomers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
$dalTablecustomers["updated_by"] = array("type"=>20,"varname"=>"updated_by", "name" => "updated_by");
$dalTablecustomers["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at");
$dalTablecustomers["status"] = array("type"=>11,"varname"=>"status", "name" => "status");
	$dalTablecustomers["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_customers"] = &$dalTablecustomers;
?>