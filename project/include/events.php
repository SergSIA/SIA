<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeRegister"]=true;

		$this->events["BeforeProcessMenu"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$message, $pageObject)
{

		$userdata["active"]= 1;
$userdata["fk_id_rol"]= 3;
$rs = DB::Query("select max(p.id)+1 as max_id  from public.user p ");
$data=$rs->fetchAssoc();
$userdata["id"] = $data["max_id"];
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
				// Welcome page: Before process
function BeforeProcessMenu($pageObject)
{

		if($_SESSION["UserData"]["fk_id_people"]>0 || $_SESSION["UserData"]["fk_id_rol"] ==1){
	
}
else{
	header("Location: people_user_add.php");
	exit();
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
