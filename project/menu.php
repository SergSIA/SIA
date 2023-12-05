<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || Security::isGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!Security::isGuest())) {
	Security::saveRedirectURL();
}


require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/advisor_events.php"));
$tableEvents["public.advisor"] = new eventclass_advisor;
include_once(getabspath("include/people_user_events.php"));
$tableEvents["public.people_user"] = new eventclass_people_user;
include_once(getabspath("include/consulting_my_events.php"));
$tableEvents["public.consulting_my"] = new eventclass_consulting_my;
include_once(getabspath("include/public_advisor_user_events.php"));
$tableEvents["public.advisor_user"] = new eventclass_public_advisor_user;
include_once(getabspath("include/public_consulting_my_advisor_events.php"));
$tableEvents["public.consulting_my_advisor"] = new eventclass_public_consulting_my_advisor;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>