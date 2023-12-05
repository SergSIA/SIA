<?php
$dalTablespecialty = array();
$dalTablespecialty["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablespecialty["description"] = array("type"=>200,"varname"=>"description", "name" => "description");
	$dalTablespecialty["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_specialty"] = &$dalTablespecialty;
?>