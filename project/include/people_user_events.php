<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_people_user  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["ProcessValuesAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeShowList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		$data = array();
$data["fk_id_people"] =$_SESSION["UserData"]["fk_id_people"] ;
DB::Update("user", $data, "id=".$_SESSION["UserData"]["id"] );

$rs_c = DB::Query("select max(p.id)+1 as max_id_c  from public.customers p ");
$data_c=$rs_c->fetchAssoc();	

$data = array();
$data["id"] = $data_c["max_id_c"]>0?$data_c["max_id_c"]:1;
$data["fk_id_people"] = $_SESSION["UserData"]["fk_id_people"];
$data["created_by"] = $_SESSION["UserData"]["id"];
$data["created_at"] = date('Y-m-d h:m:s');;
$data["updated_by"] = $_SESSION["UserData"]["id"];
$data["updated_at"] = date('Y-m-d h:m:s');
DB::Insert("public.customers", $data );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$rs = DB::Query("select max(p.id)+1 as max_id  from public.people p ");
$data=$rs->fetchAssoc();
$values["id"] 													= $data["max_id"]>0?$data["max_id"]:1;
$_SESSION["UserData"]["fk_id_people"]	= $data["max_id"]>0?$data["max_id"]:1;
$values["created_by"]									= $_SESSION["UserData"]["id"];
$values["created_at"]									= date('Y-m-d h:m:s');
$values["updated_by"]									= $_SESSION["UserData"]["id"];
$values["updated_at"]									= date('Y-m-d h:m:s');;


// Place event code here.

// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, $pageObject)
{

		$id = $_SESSION["UserData"]["fk_id_people"]>0?$_SESSION["UserData"]["fk_id_people"]:0;
$strWhereClause = whereAdd($strWhereClause, "id=$id");


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
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
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
