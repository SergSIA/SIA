<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableuser["active"] = array("type"=>2,"varname"=>"active", "name" => "active");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableuser["fk_id_rol"] = array("type"=>3,"varname"=>"fk_id_rol", "name" => "fk_id_rol");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableuser["reset_token"] = array("type"=>200,"varname"=>"reset_token", "name" => "reset_token");
$dalTableuser["created"] = array("type"=>135,"varname"=>"created", "name" => "created");
$dalTableuser["updated"] = array("type"=>135,"varname"=>"updated", "name" => "updated");
$dalTableuser["fk_id_people"] = array("type"=>20,"varname"=>"fk_id_people", "name" => "fk_id_people");
$dalTableuser["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic");
$dalTableuser["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
	$dalTableuser["id"]["key"]=true;

$dal_info["postgres_at_localhost_public_user"] = &$dalTableuser;
?>