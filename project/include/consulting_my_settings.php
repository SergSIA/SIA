<?php
$tdataconsulting_my = array();
$tdataconsulting_my[".searchableFields"] = array();
$tdataconsulting_my[".ShortName"] = "consulting_my";
$tdataconsulting_my[".OwnerID"] = "";
$tdataconsulting_my[".OriginalTable"] = "public.consulting";


$tdataconsulting_my[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsulting_my[".originalPagesByType"] = $tdataconsulting_my[".pagesByType"];
$tdataconsulting_my[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsulting_my[".originalPages"] = $tdataconsulting_my[".pages"];
$tdataconsulting_my[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsulting_my[".originalDefaultPages"] = $tdataconsulting_my[".defaultPages"];

//	field labels
$fieldLabelsconsulting_my = array();
$fieldToolTipsconsulting_my = array();
$pageTitlesconsulting_my = array();
$placeHoldersconsulting_my = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsulting_my["English"] = array();
	$fieldToolTipsconsulting_my["English"] = array();
	$placeHoldersconsulting_my["English"] = array();
	$pageTitlesconsulting_my["English"] = array();
	$fieldLabelsconsulting_my["English"]["id"] = "Code";
	$fieldToolTipsconsulting_my["English"]["id"] = "";
	$placeHoldersconsulting_my["English"]["id"] = "";
	$fieldLabelsconsulting_my["English"]["fk_id_advisor"] = "Specialty - Advisor";
	$fieldToolTipsconsulting_my["English"]["fk_id_advisor"] = "";
	$placeHoldersconsulting_my["English"]["fk_id_advisor"] = "";
	$fieldLabelsconsulting_my["English"]["fk_id_customer"] = "Customer";
	$fieldToolTipsconsulting_my["English"]["fk_id_customer"] = "";
	$placeHoldersconsulting_my["English"]["fk_id_customer"] = "";
	$fieldLabelsconsulting_my["English"]["start"] = "Start";
	$fieldToolTipsconsulting_my["English"]["start"] = "";
	$placeHoldersconsulting_my["English"]["start"] = "";
	$fieldLabelsconsulting_my["English"]["end"] = "End";
	$fieldToolTipsconsulting_my["English"]["end"] = "";
	$placeHoldersconsulting_my["English"]["end"] = "";
	$fieldLabelsconsulting_my["English"]["fk_id_status_consulting"] = "Status Consulting";
	$fieldToolTipsconsulting_my["English"]["fk_id_status_consulting"] = "";
	$placeHoldersconsulting_my["English"]["fk_id_status_consulting"] = "";
	$fieldLabelsconsulting_my["English"]["access"] = "Access";
	$fieldToolTipsconsulting_my["English"]["access"] = "";
	$placeHoldersconsulting_my["English"]["access"] = "";
	$fieldLabelsconsulting_my["English"]["start_h"] = "Time";
	$fieldToolTipsconsulting_my["English"]["start_h"] = "";
	$placeHoldersconsulting_my["English"]["start_h"] = "";
	$fieldLabelsconsulting_my["English"]["end_h"] = "Time";
	$fieldToolTipsconsulting_my["English"]["end_h"] = "";
	$placeHoldersconsulting_my["English"]["end_h"] = "";
	$pageTitlesconsulting_my["English"]["add"] = "Mis Asesorias, Añadir nuevo";
	if (count($fieldToolTipsconsulting_my["English"]))
		$tdataconsulting_my[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulting_my["Spanish"] = array();
	$fieldToolTipsconsulting_my["Spanish"] = array();
	$placeHoldersconsulting_my["Spanish"] = array();
	$pageTitlesconsulting_my["Spanish"] = array();
	$fieldLabelsconsulting_my["Spanish"]["id"] = "Codigo";
	$fieldToolTipsconsulting_my["Spanish"]["id"] = "";
	$placeHoldersconsulting_my["Spanish"]["id"] = "";
	$fieldLabelsconsulting_my["Spanish"]["fk_id_advisor"] = "Especialidad - Asesor";
	$fieldToolTipsconsulting_my["Spanish"]["fk_id_advisor"] = "";
	$placeHoldersconsulting_my["Spanish"]["fk_id_advisor"] = "";
	$fieldLabelsconsulting_my["Spanish"]["fk_id_customer"] = "Cliente";
	$fieldToolTipsconsulting_my["Spanish"]["fk_id_customer"] = "";
	$placeHoldersconsulting_my["Spanish"]["fk_id_customer"] = "";
	$fieldLabelsconsulting_my["Spanish"]["start"] = "Inicio";
	$fieldToolTipsconsulting_my["Spanish"]["start"] = "";
	$placeHoldersconsulting_my["Spanish"]["start"] = "";
	$fieldLabelsconsulting_my["Spanish"]["end"] = "Fin";
	$fieldToolTipsconsulting_my["Spanish"]["end"] = "";
	$placeHoldersconsulting_my["Spanish"]["end"] = "";
	$fieldLabelsconsulting_my["Spanish"]["fk_id_status_consulting"] = "Estado Asesoria";
	$fieldToolTipsconsulting_my["Spanish"]["fk_id_status_consulting"] = "";
	$placeHoldersconsulting_my["Spanish"]["fk_id_status_consulting"] = "";
	$fieldLabelsconsulting_my["Spanish"]["access"] = "Acceso ";
	$fieldToolTipsconsulting_my["Spanish"]["access"] = "";
	$placeHoldersconsulting_my["Spanish"]["access"] = "";
	$fieldLabelsconsulting_my["Spanish"]["start_h"] = "Hora";
	$fieldToolTipsconsulting_my["Spanish"]["start_h"] = "";
	$placeHoldersconsulting_my["Spanish"]["start_h"] = "";
	$fieldLabelsconsulting_my["Spanish"]["end_h"] = "Hora";
	$fieldToolTipsconsulting_my["Spanish"]["end_h"] = "";
	$placeHoldersconsulting_my["Spanish"]["end_h"] = "";
	if (count($fieldToolTipsconsulting_my["Spanish"]))
		$tdataconsulting_my[".isUseToolTips"] = true;
}


	$tdataconsulting_my[".NCSearch"] = true;



$tdataconsulting_my[".shortTableName"] = "consulting_my";
$tdataconsulting_my[".nSecOptions"] = 0;

$tdataconsulting_my[".mainTableOwnerID"] = "";
$tdataconsulting_my[".entityType"] = 1;
$tdataconsulting_my[".connId"] = "postgres_at_localhost";


$tdataconsulting_my[".strOriginalTableName"] = "public.consulting";

	



$tdataconsulting_my[".showAddInPopup"] = false;

$tdataconsulting_my[".showEditInPopup"] = false;

$tdataconsulting_my[".showViewInPopup"] = false;

$tdataconsulting_my[".listAjax"] = false;
//	temporary
//$tdataconsulting_my[".listAjax"] = false;

	$tdataconsulting_my[".audit"] = false;

	$tdataconsulting_my[".locking"] = false;


$pages = $tdataconsulting_my[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulting_my[".edit"] = true;
	$tdataconsulting_my[".afterEditAction"] = 1;
	$tdataconsulting_my[".closePopupAfterEdit"] = 1;
	$tdataconsulting_my[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulting_my[".add"] = true;
$tdataconsulting_my[".afterAddAction"] = 1;
$tdataconsulting_my[".closePopupAfterAdd"] = 1;
$tdataconsulting_my[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulting_my[".list"] = true;
}



$tdataconsulting_my[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulting_my[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulting_my[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulting_my[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulting_my[".printFriendly"] = true;
}



$tdataconsulting_my[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulting_my[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulting_my[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulting_my[".isUseAjaxSuggest"] = true;

$tdataconsulting_my[".rowHighlite"] = true;



																																																

$tdataconsulting_my[".ajaxCodeSnippetAdded"] = false;

$tdataconsulting_my[".buttonsAdded"] = false;

$tdataconsulting_my[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulting_my[".isUseTimeForSearch"] = true;


$tdataconsulting_my[".badgeColor"] = "4169E1";


$tdataconsulting_my[".allSearchFields"] = array();
$tdataconsulting_my[".filterFields"] = array();
$tdataconsulting_my[".requiredSearchFields"] = array();

$tdataconsulting_my[".googleLikeFields"] = array();
$tdataconsulting_my[".googleLikeFields"][] = "id";
$tdataconsulting_my[".googleLikeFields"][] = "fk_id_advisor";
$tdataconsulting_my[".googleLikeFields"][] = "fk_id_customer";
$tdataconsulting_my[".googleLikeFields"][] = "start";
$tdataconsulting_my[".googleLikeFields"][] = "end";
$tdataconsulting_my[".googleLikeFields"][] = "fk_id_status_consulting";
$tdataconsulting_my[".googleLikeFields"][] = "access";
$tdataconsulting_my[".googleLikeFields"][] = "start_h";
$tdataconsulting_my[".googleLikeFields"][] = "end_h";



$tdataconsulting_my[".tableType"] = "list";

$tdataconsulting_my[".printerPageOrientation"] = 0;
$tdataconsulting_my[".nPrinterPageScale"] = 100;

$tdataconsulting_my[".nPrinterSplitRecords"] = 40;

$tdataconsulting_my[".geocodingEnabled"] = false;










$tdataconsulting_my[".pageSize"] = 20;

$tdataconsulting_my[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulting_my[".strOrderBy"] = $tstrOrderBy;

$tdataconsulting_my[".orderindexes"] = array();


$tdataconsulting_my[".sqlHead"] = "SELECT id,  	fk_id_advisor,  	fk_id_customer,  	\"start\",  	\"end\",  	fk_id_status_consulting,  	\"access\",  	start_h,  	end_h";
$tdataconsulting_my[".sqlFrom"] = "FROM \"public\".consulting";
$tdataconsulting_my[".sqlWhereExpr"] = "";
$tdataconsulting_my[".sqlTail"] = "";

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
$tdataconsulting_my[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulting_my[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulting_my[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulting_my[".highlightSearchResults"] = true;

$tableKeysconsulting_my = array();
$tableKeysconsulting_my[] = "id";
$tdataconsulting_my[".Keys"] = $tableKeysconsulting_my;


$tdataconsulting_my[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataconsulting_my["id"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "id";
//	fk_id_advisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_advisor";
	$fdata["GoodName"] = "fk_id_advisor";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","fk_id_advisor");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_advisor";

		$fdata["sourceSingle"] = "fk_id_advisor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_advisor";

	
	
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
	$edata["DisplayField"] = "advisor";

	

	
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


	$tdataconsulting_my["fk_id_advisor"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "fk_id_advisor";
//	fk_id_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_customer";
	$fdata["GoodName"] = "fk_id_customer";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","fk_id_customer");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_customer";

		$fdata["sourceSingle"] = "fk_id_customer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_customer";

	
	
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


	$tdataconsulting_my["fk_id_customer"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "fk_id_customer";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","start");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start";

		$fdata["sourceSingle"] = "start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"start\"";

	
	
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


	$tdataconsulting_my["start"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","end");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end";

		$fdata["sourceSingle"] = "end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"end\"";

	
	
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


	$tdataconsulting_my["end"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "end";
//	fk_id_status_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_status_consulting";
	$fdata["GoodName"] = "fk_id_status_consulting";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","fk_id_status_consulting");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_status_consulting";

		$fdata["sourceSingle"] = "fk_id_status_consulting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_status_consulting";

	
	
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


	$tdataconsulting_my["fk_id_status_consulting"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "fk_id_status_consulting";
//	access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "access";
	$fdata["GoodName"] = "access";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","access");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "access";

		$fdata["sourceSingle"] = "access";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"access\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
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


	$tdataconsulting_my["access"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "access";
//	start_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "start_h";
	$fdata["GoodName"] = "start_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","start_h");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "start_h";

		$fdata["sourceSingle"] = "start_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_h";

	
	
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


	$tdataconsulting_my["start_h"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "start_h";
//	end_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "end_h";
	$fdata["GoodName"] = "end_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my","end_h");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "end_h";

		$fdata["sourceSingle"] = "end_h";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_h";

	
	
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


	$tdataconsulting_my["end_h"] = $fdata;
		$tdataconsulting_my[".searchableFields"][] = "end_h";


$tables_data["public.consulting_my"]=&$tdataconsulting_my;
$field_labels["public_consulting_my"] = &$fieldLabelsconsulting_my;
$fieldToolTips["public_consulting_my"] = &$fieldToolTipsconsulting_my;
$placeHolders["public_consulting_my"] = &$placeHoldersconsulting_my;
$page_titles["public_consulting_my"] = &$pageTitlesconsulting_my;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.consulting_my"] = array();
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


		
	$detailsTablesData["public.consulting_my"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.consulting_my"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.consulting_my"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.consulting_my"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.consulting_my"][$dIndex]["detailKeys"][]="fk_id_consulting";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.consulting_my"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.advisor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.advisor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "advisor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting_my"][0] = $masterParams;
				$masterTablesData["public.consulting_my"][0]["masterKeys"] = array();
	$masterTablesData["public.consulting_my"][0]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my"][0]["detailKeys"] = array();
	$masterTablesData["public.consulting_my"][0]["detailKeys"][]="fk_id_advisor";
		
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
					$masterTablesData["public.consulting_my"][1] = $masterParams;
				$masterTablesData["public.consulting_my"][1]["masterKeys"] = array();
	$masterTablesData["public.consulting_my"][1]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my"][1]["detailKeys"] = array();
	$masterTablesData["public.consulting_my"][1]["detailKeys"][]="fk_id_customer";
		
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
					$masterTablesData["public.consulting_my"][2] = $masterParams;
				$masterTablesData["public.consulting_my"][2]["masterKeys"] = array();
	$masterTablesData["public.consulting_my"][2]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my"][2]["detailKeys"] = array();
	$masterTablesData["public.consulting_my"][2]["detailKeys"][]="fk_id_status_consulting";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulting_my()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_id_advisor,  	fk_id_customer,  	\"start\",  	\"end\",  	fk_id_status_consulting,  	\"access\",  	start_h,  	end_h";
$proto0["m_strFrom"] = "FROM \"public\".consulting";
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
	"m_srcTableName" => "public.consulting_my"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.consulting_my";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto8["m_sql"] = "fk_id_advisor";
$proto8["m_srcTableName"] = "public.consulting_my";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_customer",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto10["m_sql"] = "fk_id_customer";
$proto10["m_srcTableName"] = "public.consulting_my";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto12["m_sql"] = "\"start\"";
$proto12["m_srcTableName"] = "public.consulting_my";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto14["m_sql"] = "\"end\"";
$proto14["m_srcTableName"] = "public.consulting_my";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_consulting",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto16["m_sql"] = "fk_id_status_consulting";
$proto16["m_srcTableName"] = "public.consulting_my";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "access",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto18["m_sql"] = "\"access\"";
$proto18["m_srcTableName"] = "public.consulting_my";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "start_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto20["m_sql"] = "start_h";
$proto20["m_srcTableName"] = "public.consulting_my";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "end_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my"
));

$proto22["m_sql"] = "end_h";
$proto22["m_srcTableName"] = "public.consulting_my";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.consulting";
$proto25["m_srcTableName"] = "public.consulting_my";
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
$proto24["m_srcTableName"] = "public.consulting_my";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.consulting_my";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulting_my = createSqlQuery_consulting_my();


	
		;

									

$tdataconsulting_my[".sqlquery"] = $queryData_consulting_my;



include_once(getabspath("include/consulting_my_events.php"));
$tableEvents["public.consulting_my"] = new eventclass_consulting_my;
$tdataconsulting_my[".hasEvents"] = true;

?>