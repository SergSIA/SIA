<?php
$dalTablepeople = array();
$dalTablepeople["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablepeople["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTablepeople["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name");
$dalTablepeople["birth_date"] = array("type"=>7,"varname"=>"birth_date", "name" => "birth_date");
$dalTablepeople["created_by"] = array("type"=>20,"varname"=>"created_by", "name" => "created_by");
$dalTablepeople["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
$dalTablepeople["updated_by"] = array("type"=>20,"varname"=>"updated_by", "name" => "updated_by");
$dalTablepeople["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at");
$dalTablepeople["fk_type_doc"] = array("type"=>3,"varname"=>"fk_type_doc", "name" => "fk_type_doc");
$dalTablepeople["document"] = array("type"=>200,"varname"=>"document", "name" => "document");
$dalTablepeople["telf"] = array("type"=>200,"varname"=>"telf", "name" => "telf");
$dalTablepeople["country"] = array("type"=>20,"varname"=>"country", "name" => "country");
	$dalTablepeople["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_people"] = &$dalTablepeople;
?>