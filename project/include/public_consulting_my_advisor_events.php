<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_public_consulting_my_advisor  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeQueryList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$values["fk_id_customer"] = $_SESSION["UserData"]["fk_id_people"];

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		if($_SESSION["UserData"]["fk_id_people"]>0){
	
}
else{
	header("Location: people_user_add.php");
	exit();
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		//$pageObject->showItem("cancelar_ase", $recordId);

if($data['fk_id_status_consulting']==1){
	$pageObject->hideItem("grid_edit", $recordId);
	$pageObject->showItem("custom_button", $recordId);
	$pageObject->showItem("custom_button2", $recordId);
	$pageObject->hideItem("custom_button1", $recordId);

}
if($data['fk_id_status_consulting']==2){
	$pageObject->showItem("grid_edit", $recordId);
	$pageObject->hideItem("custom_button", $recordId);
	$pageObject->showItem("custom_button1", $recordId);
	$pageObject->hideItem("custom_button2", $recordId);
}
if($data['fk_id_status_consulting']==3){
	$pageObject->hideItem("grid_edit", $recordId);
	$pageObject->hideItem("custom_button2", $recordId);
	$pageObject->hideItem("custom_button", $recordId);
	$pageObject->hideItem("custom_button1", $recordId);
}

if($data['fk_id_status_consulting']==4){
	$pageObject->hideItem("grid_edit", $recordId);
	$pageObject->hideItem("custom_button2", $recordId);
	$pageObject->hideItem("custom_button", $recordId);
	$pageObject->hideItem("custom_button1", $recordId);
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, $pageObject)
{

		$id = $_SESSION["UserData"]["fk_id_people"];
$strWhereClause = whereAdd($strWhereClause, "fk_id_people=$id");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>