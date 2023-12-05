<?php
$dalTablepayment = array();
$dalTablepayment["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablepayment["fk_id_consulting"] = array("type"=>20,"varname"=>"fk_id_consulting", "name" => "fk_id_consulting");
$dalTablepayment["price"] = array("type"=>14,"varname"=>"price", "name" => "price");
$dalTablepayment["fk_id_status_payment"] = array("type"=>3,"varname"=>"fk_id_status_payment", "name" => "fk_id_status_payment");
$dalTablepayment["fk_id_method_payment"] = array("type"=>3,"varname"=>"fk_id_method_payment", "name" => "fk_id_method_payment");
$dalTablepayment["obs"] = array("type"=>200,"varname"=>"obs", "name" => "obs");
	$dalTablepayment["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_payment"] = &$dalTablepayment;
?>