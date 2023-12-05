<?php
$tdatapublic_consulting_my_advisor = array();
$tdatapublic_consulting_my_advisor[".searchableFields"] = array();
$tdatapublic_consulting_my_advisor[".ShortName"] = "public_consulting_my_advisor";
$tdatapublic_consulting_my_advisor[".OwnerID"] = "";
$tdatapublic_consulting_my_advisor[".OriginalTable"] = "public.consulting";


$tdatapublic_consulting_my_advisor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapublic_consulting_my_advisor[".originalPagesByType"] = $tdatapublic_consulting_my_advisor[".pagesByType"];
$tdatapublic_consulting_my_advisor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapublic_consulting_my_advisor[".originalPages"] = $tdatapublic_consulting_my_advisor[".pages"];
$tdatapublic_consulting_my_advisor[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapublic_consulting_my_advisor[".originalDefaultPages"] = $tdatapublic_consulting_my_advisor[".defaultPages"];

//	field labels
$fieldLabelspublic_consulting_my_advisor = array();
$fieldToolTipspublic_consulting_my_advisor = array();
$pageTitlespublic_consulting_my_advisor = array();
$placeHolderspublic_consulting_my_advisor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_consulting_my_advisor["English"] = array();
	$fieldToolTipspublic_consulting_my_advisor["English"] = array();
	$placeHolderspublic_consulting_my_advisor["English"] = array();
	$pageTitlespublic_consulting_my_advisor["English"] = array();
	$fieldLabelspublic_consulting_my_advisor["English"]["id"] = "Code";
	$fieldToolTipspublic_consulting_my_advisor["English"]["id"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["id"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["fk_id_advisor"] = "Specialty - Advisor";
	$fieldToolTipspublic_consulting_my_advisor["English"]["fk_id_advisor"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["fk_id_advisor"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["fk_id_customer"] = "Customer";
	$fieldToolTipspublic_consulting_my_advisor["English"]["fk_id_customer"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["fk_id_customer"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["start"] = "Start";
	$fieldToolTipspublic_consulting_my_advisor["English"]["start"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["start"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["end"] = "End";
	$fieldToolTipspublic_consulting_my_advisor["English"]["end"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["end"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["fk_id_status_consulting"] = "Status Consulting";
	$fieldToolTipspublic_consulting_my_advisor["English"]["fk_id_status_consulting"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["fk_id_status_consulting"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["access"] = "Access";
	$fieldToolTipspublic_consulting_my_advisor["English"]["access"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["access"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["start_h"] = "Time";
	$fieldToolTipspublic_consulting_my_advisor["English"]["start_h"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["start_h"] = "";
	$fieldLabelspublic_consulting_my_advisor["English"]["end_h"] = "Time";
	$fieldToolTipspublic_consulting_my_advisor["English"]["end_h"] = "";
	$placeHolderspublic_consulting_my_advisor["English"]["end_h"] = "";
	$pageTitlespublic_consulting_my_advisor["English"]["edit"] = "Consulting My Advisor, Editar [{%id}]";
	if (count($fieldToolTipspublic_consulting_my_advisor["English"]))
		$tdatapublic_consulting_my_advisor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspublic_consulting_my_advisor["Spanish"] = array();
	$fieldToolTipspublic_consulting_my_advisor["Spanish"] = array();
	$placeHolderspublic_consulting_my_advisor["Spanish"] = array();
	$pageTitlespublic_consulting_my_advisor["Spanish"] = array();
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["id"] = "Codigo";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["id"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["id"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["fk_id_advisor"] = "Especialidad - Asesor";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["fk_id_advisor"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["fk_id_advisor"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["fk_id_customer"] = "Cliente";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["fk_id_customer"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["fk_id_customer"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["start"] = "Inicio";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["start"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["start"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["end"] = "Fin";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["end"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["end"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["fk_id_status_consulting"] = "Estado Asesoria";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["fk_id_status_consulting"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["fk_id_status_consulting"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["access"] = "Acceso ";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["access"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["access"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["start_h"] = "Hora";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["start_h"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["start_h"] = "";
	$fieldLabelspublic_consulting_my_advisor["Spanish"]["end_h"] = "Hora";
	$fieldToolTipspublic_consulting_my_advisor["Spanish"]["end_h"] = "";
	$placeHolderspublic_consulting_my_advisor["Spanish"]["end_h"] = "";
	$pageTitlespublic_consulting_my_advisor["Spanish"]["edit"] = "Asesorias Asignadas, Editar [{%id}]";
	if (count($fieldToolTipspublic_consulting_my_advisor["Spanish"]))
		$tdatapublic_consulting_my_advisor[".isUseToolTips"] = true;
}


	$tdatapublic_consulting_my_advisor[".NCSearch"] = true;



$tdatapublic_consulting_my_advisor[".shortTableName"] = "public_consulting_my_advisor";
$tdatapublic_consulting_my_advisor[".nSecOptions"] = 0;

$tdatapublic_consulting_my_advisor[".mainTableOwnerID"] = "";
$tdatapublic_consulting_my_advisor[".entityType"] = 1;
$tdatapublic_consulting_my_advisor[".connId"] = "postgres_at_localhost";


$tdatapublic_consulting_my_advisor[".strOriginalTableName"] = "public.consulting";

	



$tdatapublic_consulting_my_advisor[".showAddInPopup"] = false;

$tdatapublic_consulting_my_advisor[".showEditInPopup"] = false;

$tdatapublic_consulting_my_advisor[".showViewInPopup"] = false;

$tdatapublic_consulting_my_advisor[".listAjax"] = false;
//	temporary
//$tdatapublic_consulting_my_advisor[".listAjax"] = false;

	$tdatapublic_consulting_my_advisor[".audit"] = false;

	$tdatapublic_consulting_my_advisor[".locking"] = false;


$pages = $tdatapublic_consulting_my_advisor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapublic_consulting_my_advisor[".edit"] = true;
	$tdatapublic_consulting_my_advisor[".afterEditAction"] = 1;
	$tdatapublic_consulting_my_advisor[".closePopupAfterEdit"] = 1;
	$tdatapublic_consulting_my_advisor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapublic_consulting_my_advisor[".add"] = true;
$tdatapublic_consulting_my_advisor[".afterAddAction"] = 1;
$tdatapublic_consulting_my_advisor[".closePopupAfterAdd"] = 1;
$tdatapublic_consulting_my_advisor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapublic_consulting_my_advisor[".list"] = true;
}



$tdatapublic_consulting_my_advisor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapublic_consulting_my_advisor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapublic_consulting_my_advisor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapublic_consulting_my_advisor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapublic_consulting_my_advisor[".printFriendly"] = true;
}



$tdatapublic_consulting_my_advisor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapublic_consulting_my_advisor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapublic_consulting_my_advisor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapublic_consulting_my_advisor[".isUseAjaxSuggest"] = true;

$tdatapublic_consulting_my_advisor[".rowHighlite"] = true;



																																																

$tdatapublic_consulting_my_advisor[".ajaxCodeSnippetAdded"] = false;

$tdatapublic_consulting_my_advisor[".buttonsAdded"] = false;

$tdatapublic_consulting_my_advisor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_consulting_my_advisor[".isUseTimeForSearch"] = true;


$tdatapublic_consulting_my_advisor[".badgeColor"] = "EDCA00";


$tdatapublic_consulting_my_advisor[".allSearchFields"] = array();
$tdatapublic_consulting_my_advisor[".filterFields"] = array();
$tdatapublic_consulting_my_advisor[".requiredSearchFields"] = array();

$tdatapublic_consulting_my_advisor[".googleLikeFields"] = array();
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "id";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "fk_id_advisor";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "fk_id_customer";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "start";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "end";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "fk_id_status_consulting";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "access";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "start_h";
$tdatapublic_consulting_my_advisor[".googleLikeFields"][] = "end_h";



$tdatapublic_consulting_my_advisor[".tableType"] = "list";

$tdatapublic_consulting_my_advisor[".printerPageOrientation"] = 0;
$tdatapublic_consulting_my_advisor[".nPrinterPageScale"] = 100;

$tdatapublic_consulting_my_advisor[".nPrinterSplitRecords"] = 40;

$tdatapublic_consulting_my_advisor[".geocodingEnabled"] = false;










$tdatapublic_consulting_my_advisor[".pageSize"] = 20;

$tdatapublic_consulting_my_advisor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapublic_consulting_my_advisor[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_consulting_my_advisor[".orderindexes"] = array();


$tdatapublic_consulting_my_advisor[".sqlHead"] = "SELECT \"public\".consulting.id,  \"public\".consulting.fk_id_advisor,  \"public\".consulting.fk_id_customer,  \"public\".consulting.\"start\",  \"public\".consulting.\"end\",  \"public\".consulting.fk_id_status_consulting,  \"public\".consulting.\"access\",  \"public\".consulting.start_h,  \"public\".consulting.end_h";
$tdatapublic_consulting_my_advisor[".sqlFrom"] = "FROM \"public\".consulting  INNER JOIN \"public\".advisor ON \"public\".consulting.fk_id_advisor = \"public\".advisor.id";
$tdatapublic_consulting_my_advisor[".sqlWhereExpr"] = "";
$tdatapublic_consulting_my_advisor[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapublic_consulting_my_advisor[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_consulting_my_advisor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_consulting_my_advisor[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_consulting_my_advisor[".highlightSearchResults"] = true;

$tableKeyspublic_consulting_my_advisor = array();
$tableKeyspublic_consulting_my_advisor[] = "id";
$tdatapublic_consulting_my_advisor[".Keys"] = $tableKeyspublic_consulting_my_advisor;


$tdatapublic_consulting_my_advisor[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["id"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "id";
//	fk_id_advisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_advisor";
	$fdata["GoodName"] = "fk_id_advisor";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","fk_id_advisor");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_advisor";

		$fdata["sourceSingle"] = "fk_id_advisor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.fk_id_advisor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.advisor_user";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "last_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["fk_id_advisor"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "fk_id_advisor";
//	fk_id_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_customer";
	$fdata["GoodName"] = "fk_id_customer";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","fk_id_customer");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_customer";

		$fdata["sourceSingle"] = "fk_id_customer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.fk_id_customer";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.customers";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["fk_id_customer"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "fk_id_customer";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","start");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start";

		$fdata["sourceSingle"] = "start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.\"start\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["start"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","end");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end";

		$fdata["sourceSingle"] = "end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.\"end\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["end"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "end";
//	fk_id_status_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_status_consulting";
	$fdata["GoodName"] = "fk_id_status_consulting";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","fk_id_status_consulting");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_status_consulting";

		$fdata["sourceSingle"] = "fk_id_status_consulting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.fk_id_status_consulting";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.status_consulting";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "description";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["fk_id_status_consulting"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "fk_id_status_consulting";
//	access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "access";
	$fdata["GoodName"] = "access";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","access");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "access";

		$fdata["sourceSingle"] = "access";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.\"access\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "CustomID";
	$vdata["hlLinkWordText"] = "LINK";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "^(https?|ftp)://[^\\s/\$.?#].[^\\s]*\$";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "NO_ES_UN_ENLACE", "messageType" => "CustomID");
			$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["access"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "access";
//	start_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "start_h";
	$fdata["GoodName"] = "start_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","start_h");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "start_h";

		$fdata["sourceSingle"] = "start_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.start_h";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["start_h"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "start_h";
//	end_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "end_h";
	$fdata["GoodName"] = "end_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","end_h");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "end_h";

		$fdata["sourceSingle"] = "end_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".consulting.end_h";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapublic_consulting_my_advisor["end_h"] = $fdata;
		$tdatapublic_consulting_my_advisor[".searchableFields"][] = "end_h";


$tables_data["public.consulting_my_advisor"]=&$tdatapublic_consulting_my_advisor;
$field_labels["public_consulting_my_advisor"] = &$fieldLabelspublic_consulting_my_advisor;
$fieldToolTips["public_consulting_my_advisor"] = &$fieldToolTipspublic_consulting_my_advisor;
$placeHolders["public_consulting_my_advisor"] = &$placeHolderspublic_consulting_my_advisor;
$page_titles["public_consulting_my_advisor"] = &$pageTitlespublic_consulting_my_advisor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.consulting_my_advisor"] = array();
//	public.payment
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.payment";
		$detailsParam["dOriginalTable"] = "public.payment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_payment");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.consulting_my_advisor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.consulting_my_advisor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.consulting_my_advisor"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.consulting_my_advisor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.consulting_my_advisor"][$dIndex]["detailKeys"][]="fk_id_consulting";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.consulting_my_advisor"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.advisor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.advisor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "advisor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting_my_advisor"][0] = $masterParams;
				$masterTablesData["public.consulting_my_advisor"][0]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][0]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor"][0]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][0]["detailKeys"][]="fk_id_advisor";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.customers";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.customers";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customers";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting_my_advisor"][1] = $masterParams;
				$masterTablesData["public.consulting_my_advisor"][1]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][1]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor"][1]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][1]["detailKeys"][]="fk_id_customer";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.status_consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.status_consulting";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "status_consulting";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting_my_advisor"][2] = $masterParams;
				$masterTablesData["public.consulting_my_advisor"][2]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][2]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor"][2]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][2]["detailKeys"][]="fk_id_status_consulting";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_public_consulting_my_advisor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".consulting.id,  \"public\".consulting.fk_id_advisor,  \"public\".consulting.fk_id_customer,  \"public\".consulting.\"start\",  \"public\".consulting.\"end\",  \"public\".consulting.fk_id_status_consulting,  \"public\".consulting.\"access\",  \"public\".consulting.start_h,  \"public\".consulting.end_h";
$proto0["m_strFrom"] = "FROM \"public\".consulting  INNER JOIN \"public\".advisor ON \"public\".consulting.fk_id_advisor = \"public\".advisor.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto6["m_sql"] = "\"public\".consulting.id";
$proto6["m_srcTableName"] = "public.consulting_my_advisor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto8["m_sql"] = "\"public\".consulting.fk_id_advisor";
$proto8["m_srcTableName"] = "public.consulting_my_advisor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_customer",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto10["m_sql"] = "\"public\".consulting.fk_id_customer";
$proto10["m_srcTableName"] = "public.consulting_my_advisor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto12["m_sql"] = "\"public\".consulting.\"start\"";
$proto12["m_srcTableName"] = "public.consulting_my_advisor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto14["m_sql"] = "\"public\".consulting.\"end\"";
$proto14["m_srcTableName"] = "public.consulting_my_advisor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_consulting",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto16["m_sql"] = "\"public\".consulting.fk_id_status_consulting";
$proto16["m_srcTableName"] = "public.consulting_my_advisor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "access",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto18["m_sql"] = "\"public\".consulting.\"access\"";
$proto18["m_srcTableName"] = "public.consulting_my_advisor";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "start_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto20["m_sql"] = "\"public\".consulting.start_h";
$proto20["m_srcTableName"] = "public.consulting_my_advisor";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "end_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto22["m_sql"] = "\"public\".consulting.end_h";
$proto22["m_srcTableName"] = "public.consulting_my_advisor";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.consulting";
$proto25["m_srcTableName"] = "public.consulting_my_advisor";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "fk_id_advisor";
$proto25["m_columns"][] = "fk_id_customer";
$proto25["m_columns"][] = "start";
$proto25["m_columns"][] = "end";
$proto25["m_columns"][] = "fk_id_status_consulting";
$proto25["m_columns"][] = "access";
$proto25["m_columns"][] = "start_h";
$proto25["m_columns"][] = "end_h";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".consulting";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.consulting_my_advisor";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "public.advisor";
$proto29["m_srcTableName"] = "public.consulting_my_advisor";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "fk_id_people";
$proto29["m_columns"][] = "fk_id_specialty";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_by";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "status";
$proto29["m_columns"][] = "commission";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN \"public\".advisor ON \"public\".consulting.fk_id_advisor = \"public\".advisor.id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.consulting_my_advisor";
$proto30=array();
$proto30["m_sql"] = "\"public\".consulting.fk_id_advisor = \"public\".advisor.id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= \"public\".advisor.id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.consulting_my_advisor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_consulting_my_advisor = createSqlQuery_public_consulting_my_advisor();


	
		;

									

$tdatapublic_consulting_my_advisor[".sqlquery"] = $queryData_public_consulting_my_advisor;



include_once(getabspath("include/public_consulting_my_advisor_events.php"));
$tableEvents["public.consulting_my_advisor"] = new eventclass_public_consulting_my_advisor;
$tdatapublic_consulting_my_advisor[".hasEvents"] = true;

?>