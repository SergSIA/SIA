<?php
$tdataconsulting_my_advisor_all = array();
$tdataconsulting_my_advisor_all[".searchableFields"] = array();
$tdataconsulting_my_advisor_all[".ShortName"] = "consulting_my_advisor_all";
$tdataconsulting_my_advisor_all[".OwnerID"] = "";
$tdataconsulting_my_advisor_all[".OriginalTable"] = "public.consulting";


$tdataconsulting_my_advisor_all[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsulting_my_advisor_all[".originalPagesByType"] = $tdataconsulting_my_advisor_all[".pagesByType"];
$tdataconsulting_my_advisor_all[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsulting_my_advisor_all[".originalPages"] = $tdataconsulting_my_advisor_all[".pages"];
$tdataconsulting_my_advisor_all[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsulting_my_advisor_all[".originalDefaultPages"] = $tdataconsulting_my_advisor_all[".defaultPages"];

//	field labels
$fieldLabelsconsulting_my_advisor_all = array();
$fieldToolTipsconsulting_my_advisor_all = array();
$pageTitlesconsulting_my_advisor_all = array();
$placeHoldersconsulting_my_advisor_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsulting_my_advisor_all["English"] = array();
	$fieldToolTipsconsulting_my_advisor_all["English"] = array();
	$placeHoldersconsulting_my_advisor_all["English"] = array();
	$pageTitlesconsulting_my_advisor_all["English"] = array();
	$fieldLabelsconsulting_my_advisor_all["English"]["id"] = "Code";
	$fieldToolTipsconsulting_my_advisor_all["English"]["id"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["id"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["fk_id_advisor"] = "Specialty - Advisor";
	$fieldToolTipsconsulting_my_advisor_all["English"]["fk_id_advisor"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["fk_id_advisor"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["fk_id_customer"] = "Customer";
	$fieldToolTipsconsulting_my_advisor_all["English"]["fk_id_customer"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["fk_id_customer"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["start"] = "Start";
	$fieldToolTipsconsulting_my_advisor_all["English"]["start"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["start"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["end"] = "End";
	$fieldToolTipsconsulting_my_advisor_all["English"]["end"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["end"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["fk_id_status_consulting"] = "Status Consulting";
	$fieldToolTipsconsulting_my_advisor_all["English"]["fk_id_status_consulting"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["fk_id_status_consulting"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["access"] = "Access";
	$fieldToolTipsconsulting_my_advisor_all["English"]["access"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["access"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["start_h"] = "Time";
	$fieldToolTipsconsulting_my_advisor_all["English"]["start_h"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["start_h"] = "";
	$fieldLabelsconsulting_my_advisor_all["English"]["end_h"] = "Time";
	$fieldToolTipsconsulting_my_advisor_all["English"]["end_h"] = "";
	$placeHoldersconsulting_my_advisor_all["English"]["end_h"] = "";
	if (count($fieldToolTipsconsulting_my_advisor_all["English"]))
		$tdataconsulting_my_advisor_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulting_my_advisor_all["Spanish"] = array();
	$fieldToolTipsconsulting_my_advisor_all["Spanish"] = array();
	$placeHoldersconsulting_my_advisor_all["Spanish"] = array();
	$pageTitlesconsulting_my_advisor_all["Spanish"] = array();
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["id"] = "Codigo";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["id"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["id"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["fk_id_advisor"] = "Especialidad - Asesor";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["fk_id_advisor"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["fk_id_advisor"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["fk_id_customer"] = "Cliente";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["fk_id_customer"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["fk_id_customer"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["start"] = "Inicio";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["start"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["start"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["end"] = "Fin";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["end"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["end"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["fk_id_status_consulting"] = "Estado Asesoria";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["fk_id_status_consulting"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["fk_id_status_consulting"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["access"] = "Acceso ";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["access"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["access"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["start_h"] = "Hora";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["start_h"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["start_h"] = "";
	$fieldLabelsconsulting_my_advisor_all["Spanish"]["end_h"] = "Hora";
	$fieldToolTipsconsulting_my_advisor_all["Spanish"]["end_h"] = "";
	$placeHoldersconsulting_my_advisor_all["Spanish"]["end_h"] = "";
	if (count($fieldToolTipsconsulting_my_advisor_all["Spanish"]))
		$tdataconsulting_my_advisor_all[".isUseToolTips"] = true;
}


	$tdataconsulting_my_advisor_all[".NCSearch"] = true;



$tdataconsulting_my_advisor_all[".shortTableName"] = "consulting_my_advisor_all";
$tdataconsulting_my_advisor_all[".nSecOptions"] = 0;

$tdataconsulting_my_advisor_all[".mainTableOwnerID"] = "";
$tdataconsulting_my_advisor_all[".entityType"] = 1;
$tdataconsulting_my_advisor_all[".connId"] = "postgres_at_localhost";


$tdataconsulting_my_advisor_all[".strOriginalTableName"] = "public.consulting";

	



$tdataconsulting_my_advisor_all[".showAddInPopup"] = false;

$tdataconsulting_my_advisor_all[".showEditInPopup"] = false;

$tdataconsulting_my_advisor_all[".showViewInPopup"] = false;

$tdataconsulting_my_advisor_all[".listAjax"] = false;
//	temporary
//$tdataconsulting_my_advisor_all[".listAjax"] = false;

	$tdataconsulting_my_advisor_all[".audit"] = false;

	$tdataconsulting_my_advisor_all[".locking"] = false;


$pages = $tdataconsulting_my_advisor_all[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulting_my_advisor_all[".edit"] = true;
	$tdataconsulting_my_advisor_all[".afterEditAction"] = 1;
	$tdataconsulting_my_advisor_all[".closePopupAfterEdit"] = 1;
	$tdataconsulting_my_advisor_all[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulting_my_advisor_all[".add"] = true;
$tdataconsulting_my_advisor_all[".afterAddAction"] = 1;
$tdataconsulting_my_advisor_all[".closePopupAfterAdd"] = 1;
$tdataconsulting_my_advisor_all[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulting_my_advisor_all[".list"] = true;
}



$tdataconsulting_my_advisor_all[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulting_my_advisor_all[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulting_my_advisor_all[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulting_my_advisor_all[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulting_my_advisor_all[".printFriendly"] = true;
}



$tdataconsulting_my_advisor_all[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulting_my_advisor_all[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulting_my_advisor_all[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulting_my_advisor_all[".isUseAjaxSuggest"] = true;

$tdataconsulting_my_advisor_all[".rowHighlite"] = true;



																								

$tdataconsulting_my_advisor_all[".ajaxCodeSnippetAdded"] = false;

$tdataconsulting_my_advisor_all[".buttonsAdded"] = false;

$tdataconsulting_my_advisor_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulting_my_advisor_all[".isUseTimeForSearch"] = true;


$tdataconsulting_my_advisor_all[".badgeColor"] = "7B68EE";


$tdataconsulting_my_advisor_all[".allSearchFields"] = array();
$tdataconsulting_my_advisor_all[".filterFields"] = array();
$tdataconsulting_my_advisor_all[".requiredSearchFields"] = array();

$tdataconsulting_my_advisor_all[".googleLikeFields"] = array();
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "id";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "fk_id_advisor";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "fk_id_customer";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "start";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "end";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "fk_id_status_consulting";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "access";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "start_h";
$tdataconsulting_my_advisor_all[".googleLikeFields"][] = "end_h";



$tdataconsulting_my_advisor_all[".tableType"] = "list";

$tdataconsulting_my_advisor_all[".printerPageOrientation"] = 0;
$tdataconsulting_my_advisor_all[".nPrinterPageScale"] = 100;

$tdataconsulting_my_advisor_all[".nPrinterSplitRecords"] = 40;

$tdataconsulting_my_advisor_all[".geocodingEnabled"] = false;










$tdataconsulting_my_advisor_all[".pageSize"] = 20;

$tdataconsulting_my_advisor_all[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulting_my_advisor_all[".strOrderBy"] = $tstrOrderBy;

$tdataconsulting_my_advisor_all[".orderindexes"] = array();


$tdataconsulting_my_advisor_all[".sqlHead"] = "SELECT id,  	fk_id_advisor,  	fk_id_customer,  	\"start\",  	\"end\",  	fk_id_status_consulting,  	\"access\",  	start_h,  	end_h";
$tdataconsulting_my_advisor_all[".sqlFrom"] = "FROM \"public\".consulting";
$tdataconsulting_my_advisor_all[".sqlWhereExpr"] = "";
$tdataconsulting_my_advisor_all[".sqlTail"] = "";

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
$tdataconsulting_my_advisor_all[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulting_my_advisor_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulting_my_advisor_all[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulting_my_advisor_all[".highlightSearchResults"] = true;

$tableKeysconsulting_my_advisor_all = array();
$tableKeysconsulting_my_advisor_all[] = "id";
$tdataconsulting_my_advisor_all[".Keys"] = $tableKeysconsulting_my_advisor_all;


$tdataconsulting_my_advisor_all[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","id");
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


	$tdataconsulting_my_advisor_all["id"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "id";
//	fk_id_advisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_advisor";
	$fdata["GoodName"] = "fk_id_advisor";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","fk_id_advisor");
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


	$tdataconsulting_my_advisor_all["fk_id_advisor"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "fk_id_advisor";
//	fk_id_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_customer";
	$fdata["GoodName"] = "fk_id_customer";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","fk_id_customer");
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


	$tdataconsulting_my_advisor_all["fk_id_customer"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "fk_id_customer";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start";
	$fdata["GoodName"] = "start";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","start");
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


	$tdataconsulting_my_advisor_all["start"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end";
	$fdata["GoodName"] = "end";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","end");
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


	$tdataconsulting_my_advisor_all["end"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "end";
//	fk_id_status_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_status_consulting";
	$fdata["GoodName"] = "fk_id_status_consulting";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","fk_id_status_consulting");
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


	$tdataconsulting_my_advisor_all["fk_id_status_consulting"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "fk_id_status_consulting";
//	access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "access";
	$fdata["GoodName"] = "access";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","access");
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


	$tdataconsulting_my_advisor_all["access"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "access";
//	start_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "start_h";
	$fdata["GoodName"] = "start_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","start_h");
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


	$tdataconsulting_my_advisor_all["start_h"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "start_h";
//	end_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "end_h";
	$fdata["GoodName"] = "end_h";
	$fdata["ownerTable"] = "public.consulting";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor_all","end_h");
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


	$tdataconsulting_my_advisor_all["end_h"] = $fdata;
		$tdataconsulting_my_advisor_all[".searchableFields"][] = "end_h";


$tables_data["public.consulting_my_advisor_all"]=&$tdataconsulting_my_advisor_all;
$field_labels["public_consulting_my_advisor_all"] = &$fieldLabelsconsulting_my_advisor_all;
$fieldToolTips["public_consulting_my_advisor_all"] = &$fieldToolTipsconsulting_my_advisor_all;
$placeHolders["public_consulting_my_advisor_all"] = &$placeHoldersconsulting_my_advisor_all;
$page_titles["public_consulting_my_advisor_all"] = &$pageTitlesconsulting_my_advisor_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.consulting_my_advisor_all"] = array();
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


		
	$detailsTablesData["public.consulting_my_advisor_all"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.consulting_my_advisor_all"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.consulting_my_advisor_all"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.consulting_my_advisor_all"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.consulting_my_advisor_all"][$dIndex]["detailKeys"][]="fk_id_consulting";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.consulting_my_advisor_all"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.advisor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.advisor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "advisor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting_my_advisor_all"][0] = $masterParams;
				$masterTablesData["public.consulting_my_advisor_all"][0]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor_all"][0]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor_all"][0]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor_all"][0]["detailKeys"][]="fk_id_advisor";
		
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
					$masterTablesData["public.consulting_my_advisor_all"][1] = $masterParams;
				$masterTablesData["public.consulting_my_advisor_all"][1]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor_all"][1]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor_all"][1]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor_all"][1]["detailKeys"][]="fk_id_customer";
		
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
					$masterTablesData["public.consulting_my_advisor_all"][2] = $masterParams;
				$masterTablesData["public.consulting_my_advisor_all"][2]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor_all"][2]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor_all"][2]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor_all"][2]["detailKeys"][]="fk_id_status_consulting";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulting_my_advisor_all()
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
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto8["m_sql"] = "fk_id_advisor";
$proto8["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_customer",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto10["m_sql"] = "fk_id_customer";
$proto10["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto12["m_sql"] = "\"start\"";
$proto12["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto14["m_sql"] = "\"end\"";
$proto14["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_consulting",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto16["m_sql"] = "fk_id_status_consulting";
$proto16["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "access",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto18["m_sql"] = "\"access\"";
$proto18["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "start_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto20["m_sql"] = "start_h";
$proto20["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "end_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor_all"
));

$proto22["m_sql"] = "end_h";
$proto22["m_srcTableName"] = "public.consulting_my_advisor_all";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.consulting";
$proto25["m_srcTableName"] = "public.consulting_my_advisor_all";
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
$proto24["m_srcTableName"] = "public.consulting_my_advisor_all";
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
$proto0["m_srcTableName"]="public.consulting_my_advisor_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulting_my_advisor_all = createSqlQuery_consulting_my_advisor_all();


	
		;

									

$tdataconsulting_my_advisor_all[".sqlquery"] = $queryData_consulting_my_advisor_all;



include_once(getabspath("include/consulting_my_advisor_all_events.php"));
$tableEvents["public.consulting_my_advisor_all"] = new eventclass_consulting_my_advisor_all;
$tdataconsulting_my_advisor_all[".hasEvents"] = true;

?>