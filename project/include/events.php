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

/*
$api_key = 'AIzaSyDrhZBg_v4zhJEs4Hk95zdndQkdCjgAfIY'; // Reemplaza con tu clave de API

$calendarId = 'primary'; // ID del calendario (puede ser 'primary' para el calendario principal del usuario)

// Datos del evento (reunión)
$eventData = array(
    'summary' => 'Reunión de ejemplo',
    'description' => 'Esta es una reunión de ejemplo creada a través de la API de Google Meet.',
    'start' => array(
        'dateTime' => '2023-08-21T10:00:00', // Fecha y hora de inicio en formato ISO 8601
        'timeZone' => 'America/New_York', // Zona horaria
    ),
    'end' => array(
        'dateTime' => '2023-08-21T11:00:00', // Fecha y hora de finalización en formato ISO 8601
        'timeZone' => 'America/New_York', // Zona horaria
    ),
    'conferenceData' => array(
        'createRequest' => array(
            'conferenceSolutionKey' => array(
                'type' => 'hangoutsMeet',
            ),
        ),
    ),
);

$eventUrl = "https://www.googleapis.com/calendar/v3/calendars/{$calendarId}/events?key={$api_key}";

$ch = curl_init($eventUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($eventData));

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

if (isset($data['htmlLink'])) {
    //echo "Reunión creada: " . $data['htmlLink'];
} else {
    //echo "Hubo un error al crear la reunión.";
	//var_dump($data);
}
*/


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessMenu

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
