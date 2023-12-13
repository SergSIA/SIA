<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["public.people"] ) ) {
			$lookupTableLinks["public.people"] = array();
		}
		if( !isset( $lookupTableLinks["public.people"]["advisor.fk_id_people"] )) {
			$lookupTableLinks["public.people"]["advisor.fk_id_people"] = array();
		}
		$lookupTableLinks["public.people"]["advisor.fk_id_people"]["edit"] = array("table" => "public.advisor", "field" => "fk_id_people", "page" => "edit");
		if( !isset( $lookupTableLinks["public.specialty"] ) ) {
			$lookupTableLinks["public.specialty"] = array();
		}
		if( !isset( $lookupTableLinks["public.specialty"]["advisor.fk_id_specialty"] )) {
			$lookupTableLinks["public.specialty"]["advisor.fk_id_specialty"] = array();
		}
		$lookupTableLinks["public.specialty"]["advisor.fk_id_specialty"]["edit"] = array("table" => "public.advisor", "field" => "fk_id_specialty", "page" => "edit");
		if( !isset( $lookupTableLinks["public.advisor1"] ) ) {
			$lookupTableLinks["public.advisor1"] = array();
		}
		if( !isset( $lookupTableLinks["public.advisor1"]["consulting.fk_id_advisor"] )) {
			$lookupTableLinks["public.advisor1"]["consulting.fk_id_advisor"] = array();
		}
		$lookupTableLinks["public.advisor1"]["consulting.fk_id_advisor"]["edit"] = array("table" => "public.consulting", "field" => "fk_id_advisor", "page" => "edit");
		if( !isset( $lookupTableLinks["public.customers1"] ) ) {
			$lookupTableLinks["public.customers1"] = array();
		}
		if( !isset( $lookupTableLinks["public.customers1"]["consulting.fk_id_customer"] )) {
			$lookupTableLinks["public.customers1"]["consulting.fk_id_customer"] = array();
		}
		$lookupTableLinks["public.customers1"]["consulting.fk_id_customer"]["edit"] = array("table" => "public.consulting", "field" => "fk_id_customer", "page" => "edit");
		if( !isset( $lookupTableLinks["public.status_consulting"] ) ) {
			$lookupTableLinks["public.status_consulting"] = array();
		}
		if( !isset( $lookupTableLinks["public.status_consulting"]["consulting.fk_id_status_consulting"] )) {
			$lookupTableLinks["public.status_consulting"]["consulting.fk_id_status_consulting"] = array();
		}
		$lookupTableLinks["public.status_consulting"]["consulting.fk_id_status_consulting"]["edit"] = array("table" => "public.consulting", "field" => "fk_id_status_consulting", "page" => "edit");
		if( !isset( $lookupTableLinks["public.people"] ) ) {
			$lookupTableLinks["public.people"] = array();
		}
		if( !isset( $lookupTableLinks["public.people"]["customers.fk_id_people"] )) {
			$lookupTableLinks["public.people"]["customers.fk_id_people"] = array();
		}
		$lookupTableLinks["public.people"]["customers.fk_id_people"]["edit"] = array("table" => "public.customers", "field" => "fk_id_people", "page" => "edit");
		if( !isset( $lookupTableLinks["public.consulting"] ) ) {
			$lookupTableLinks["public.consulting"] = array();
		}
		if( !isset( $lookupTableLinks["public.consulting"]["payment.fk_id_consulting"] )) {
			$lookupTableLinks["public.consulting"]["payment.fk_id_consulting"] = array();
		}
		$lookupTableLinks["public.consulting"]["payment.fk_id_consulting"]["edit"] = array("table" => "public.payment", "field" => "fk_id_consulting", "page" => "edit");
		if( !isset( $lookupTableLinks["public.status_payment"] ) ) {
			$lookupTableLinks["public.status_payment"] = array();
		}
		if( !isset( $lookupTableLinks["public.status_payment"]["payment.fk_id_status_payment"] )) {
			$lookupTableLinks["public.status_payment"]["payment.fk_id_status_payment"] = array();
		}
		$lookupTableLinks["public.status_payment"]["payment.fk_id_status_payment"]["edit"] = array("table" => "public.payment", "field" => "fk_id_status_payment", "page" => "edit");
		if( !isset( $lookupTableLinks["public.method_payment"] ) ) {
			$lookupTableLinks["public.method_payment"] = array();
		}
		if( !isset( $lookupTableLinks["public.method_payment"]["payment.fk_id_method_payment"] )) {
			$lookupTableLinks["public.method_payment"]["payment.fk_id_method_payment"] = array();
		}
		$lookupTableLinks["public.method_payment"]["payment.fk_id_method_payment"]["edit"] = array("table" => "public.payment", "field" => "fk_id_method_payment", "page" => "edit");
		if( !isset( $lookupTableLinks["public.document"] ) ) {
			$lookupTableLinks["public.document"] = array();
		}
		if( !isset( $lookupTableLinks["public.document"]["people.fk_type_doc"] )) {
			$lookupTableLinks["public.document"]["people.fk_type_doc"] = array();
		}
		$lookupTableLinks["public.document"]["people.fk_type_doc"]["edit"] = array("table" => "public.people", "field" => "fk_type_doc", "page" => "edit");
		if( !isset( $lookupTableLinks["public.role"] ) ) {
			$lookupTableLinks["public.role"] = array();
		}
		if( !isset( $lookupTableLinks["public.role"]["user.fk_id_rol"] )) {
			$lookupTableLinks["public.role"]["user.fk_id_rol"] = array();
		}
		$lookupTableLinks["public.role"]["user.fk_id_rol"]["edit"] = array("table" => "public.user", "field" => "fk_id_rol", "page" => "edit");
		if( !isset( $lookupTableLinks["public.people"] ) ) {
			$lookupTableLinks["public.people"] = array();
		}
		if( !isset( $lookupTableLinks["public.people"]["user.fk_id_people"] )) {
			$lookupTableLinks["public.people"]["user.fk_id_people"] = array();
		}
		$lookupTableLinks["public.people"]["user.fk_id_people"]["edit"] = array("table" => "public.user", "field" => "fk_id_people", "page" => "edit");
		if( !isset( $lookupTableLinks["public.advisor1"] ) ) {
			$lookupTableLinks["public.advisor1"] = array();
		}
		if( !isset( $lookupTableLinks["public.advisor1"]["consulting_my.fk_id_advisor"] )) {
			$lookupTableLinks["public.advisor1"]["consulting_my.fk_id_advisor"] = array();
		}
		$lookupTableLinks["public.advisor1"]["consulting_my.fk_id_advisor"]["edit"] = array("table" => "public.consulting_my", "field" => "fk_id_advisor", "page" => "edit");
		if( !isset( $lookupTableLinks["public.status_consulting"] ) ) {
			$lookupTableLinks["public.status_consulting"] = array();
		}
		if( !isset( $lookupTableLinks["public.status_consulting"]["consulting_my.fk_id_status_consulting"] )) {
			$lookupTableLinks["public.status_consulting"]["consulting_my.fk_id_status_consulting"] = array();
		}
		$lookupTableLinks["public.status_consulting"]["consulting_my.fk_id_status_consulting"]["edit"] = array("table" => "public.consulting_my", "field" => "fk_id_status_consulting", "page" => "edit");
		if( !isset( $lookupTableLinks["public.status_consulting"] ) ) {
			$lookupTableLinks["public.status_consulting"] = array();
		}
		if( !isset( $lookupTableLinks["public.status_consulting"]["consulting_my_advisor.fk_id_status_consulting"] )) {
			$lookupTableLinks["public.status_consulting"]["consulting_my_advisor.fk_id_status_consulting"] = array();
		}
		$lookupTableLinks["public.status_consulting"]["consulting_my_advisor.fk_id_status_consulting"]["edit"] = array("table" => "public.consulting_my_advisor", "field" => "fk_id_status_consulting", "page" => "edit");
		if( !isset( $lookupTableLinks["public.advisor"] ) ) {
			$lookupTableLinks["public.advisor"] = array();
		}
		if( !isset( $lookupTableLinks["public.advisor"]["consulting_my_advisor.fk_id_advisor"] )) {
			$lookupTableLinks["public.advisor"]["consulting_my_advisor.fk_id_advisor"] = array();
		}
		$lookupTableLinks["public.advisor"]["consulting_my_advisor.fk_id_advisor"]["edit"] = array("table" => "public.consulting_my_advisor", "field" => "fk_id_advisor", "page" => "edit");
		if( !isset( $lookupTableLinks["public.customers"] ) ) {
			$lookupTableLinks["public.customers"] = array();
		}
		if( !isset( $lookupTableLinks["public.customers"]["consulting_my_advisor.fk_id_customer"] )) {
			$lookupTableLinks["public.customers"]["consulting_my_advisor.fk_id_customer"] = array();
		}
		$lookupTableLinks["public.customers"]["consulting_my_advisor.fk_id_customer"]["edit"] = array("table" => "public.consulting_my_advisor", "field" => "fk_id_customer", "page" => "edit");
		if( !isset( $lookupTableLinks["public.people"] ) ) {
			$lookupTableLinks["public.people"] = array();
		}
		if( !isset( $lookupTableLinks["public.people"]["advisor_user.fk_id_people"] )) {
			$lookupTableLinks["public.people"]["advisor_user.fk_id_people"] = array();
		}
		$lookupTableLinks["public.people"]["advisor_user.fk_id_people"]["edit"] = array("table" => "public.advisor_user", "field" => "fk_id_people", "page" => "edit");
		if( !isset( $lookupTableLinks["public.specialty"] ) ) {
			$lookupTableLinks["public.specialty"] = array();
		}
		if( !isset( $lookupTableLinks["public.specialty"]["advisor_user.fk_id_specialty"] )) {
			$lookupTableLinks["public.specialty"]["advisor_user.fk_id_specialty"] = array();
		}
		$lookupTableLinks["public.specialty"]["advisor_user.fk_id_specialty"]["edit"] = array("table" => "public.advisor_user", "field" => "fk_id_specialty", "page" => "edit");
		if( !isset( $lookupTableLinks["public.consulting"] ) ) {
			$lookupTableLinks["public.consulting"] = array();
		}
		if( !isset( $lookupTableLinks["public.consulting"]["payment_advisor.fk_id_consulting"] )) {
			$lookupTableLinks["public.consulting"]["payment_advisor.fk_id_consulting"] = array();
		}
		$lookupTableLinks["public.consulting"]["payment_advisor.fk_id_consulting"]["edit"] = array("table" => "public.payment_advisor", "field" => "fk_id_consulting", "page" => "edit");
		if( !isset( $lookupTableLinks["public.status_payment"] ) ) {
			$lookupTableLinks["public.status_payment"] = array();
		}
		if( !isset( $lookupTableLinks["public.status_payment"]["payment_advisor.fk_id_status_payment"] )) {
			$lookupTableLinks["public.status_payment"]["payment_advisor.fk_id_status_payment"] = array();
		}
		$lookupTableLinks["public.status_payment"]["payment_advisor.fk_id_status_payment"]["edit"] = array("table" => "public.payment_advisor", "field" => "fk_id_status_payment", "page" => "edit");
		if( !isset( $lookupTableLinks["public.method_payment"] ) ) {
			$lookupTableLinks["public.method_payment"] = array();
		}
		if( !isset( $lookupTableLinks["public.method_payment"]["payment_advisor.fk_id_method_payment"] )) {
			$lookupTableLinks["public.method_payment"]["payment_advisor.fk_id_method_payment"] = array();
		}
		$lookupTableLinks["public.method_payment"]["payment_advisor.fk_id_method_payment"]["edit"] = array("table" => "public.payment_advisor", "field" => "fk_id_method_payment", "page" => "edit");
		if( !isset( $lookupTableLinks["public.document"] ) ) {
			$lookupTableLinks["public.document"] = array();
		}
		if( !isset( $lookupTableLinks["public.document"]["people_user.fk_type_doc"] )) {
			$lookupTableLinks["public.document"]["people_user.fk_type_doc"] = array();
		}
		$lookupTableLinks["public.document"]["people_user.fk_type_doc"]["edit"] = array("table" => "public.people_user", "field" => "fk_type_doc", "page" => "edit");
		if( !isset( $lookupTableLinks["public.country"] ) ) {
			$lookupTableLinks["public.country"] = array();
		}
		if( !isset( $lookupTableLinks["public.country"]["people_user.country"] )) {
			$lookupTableLinks["public.country"]["people_user.country"] = array();
		}
		$lookupTableLinks["public.country"]["people_user.country"]["edit"] = array("table" => "public.people_user", "field" => "country", "page" => "edit");
		if( !isset( $lookupTableLinks["public.people"] ) ) {
			$lookupTableLinks["public.people"] = array();
		}
		if( !isset( $lookupTableLinks["public.people"]["customers1.fk_id_people"] )) {
			$lookupTableLinks["public.people"]["customers1.fk_id_people"] = array();
		}
		$lookupTableLinks["public.people"]["customers1.fk_id_people"]["edit"] = array("table" => "public.customers1", "field" => "fk_id_people", "page" => "edit");
}

?>