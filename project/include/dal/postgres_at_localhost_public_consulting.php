<?php
$dalTableconsulting = array();
$dalTableconsulting["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableconsulting["fk_id_advisor"] = array("type"=>20,"varname"=>"fk_id_advisor", "name" => "fk_id_advisor");
$dalTableconsulting["fk_id_customer"] = array("type"=>20,"varname"=>"fk_id_customer", "name" => "fk_id_customer");
$dalTableconsulting["start"] = array("type"=>7,"varname"=>"start", "name" => "start");
$dalTableconsulting["end"] = array("type"=>7,"varname"=>"end", "name" => "end");
$dalTableconsulting["fk_id_status_consulting"] = array("type"=>3,"varname"=>"fk_id_status_consulting", "name" => "fk_id_status_consulting");
$dalTableconsulting["access"] = array("type"=>200,"varname"=>"access", "name" => "access");
$dalTableconsulting["start_h"] = array("type"=>134,"varname"=>"start_h", "name" => "start_h");
$dalTableconsulting["end_h"] = array("type"=>134,"varname"=>"end_h", "name" => "end_h");
	$dalTableconsulting["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_consulting"] = &$dalTableconsulting;
?>