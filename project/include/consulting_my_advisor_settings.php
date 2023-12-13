<?php
$tdataconsulting_my_advisor = array();
$tdataconsulting_my_advisor[".searchableFields"] = array();
$tdataconsulting_my_advisor[".ShortName"] = "consulting_my_advisor";
$tdataconsulting_my_advisor[".OwnerID"] = "";
$tdataconsulting_my_advisor[".OriginalTable"] = "public.consulting";


$tdataconsulting_my_advisor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsulting_my_advisor[".originalPagesByType"] = $tdataconsulting_my_advisor[".pagesByType"];
$tdataconsulting_my_advisor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsulting_my_advisor[".originalPages"] = $tdataconsulting_my_advisor[".pages"];
$tdataconsulting_my_advisor[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsulting_my_advisor[".originalDefaultPages"] = $tdataconsulting_my_advisor[".defaultPages"];

//	field labels
$fieldLabelsconsulting_my_advisor = array();
$fieldToolTipsconsulting_my_advisor = array();
$pageTitlesconsulting_my_advisor = array();
$placeHoldersconsulting_my_advisor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulting_my_advisor["Spanish"] = array();
	$fieldToolTipsconsulting_my_advisor["Spanish"] = array();
	$placeHoldersconsulting_my_advisor["Spanish"] = array();
	$pageTitlesconsulting_my_advisor["Spanish"] = array();
	$fieldLabelsconsulting_my_advisor["Spanish"]["id"] = "Id";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["id"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["id"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["start"] = "Inicia";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["start"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["start"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["end"] = "Termina";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["end"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["end"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["fk_id_status_consulting"] = "Estado";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["fk_id_status_consulting"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["fk_id_status_consulting"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["access"] = "Acceso";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["access"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["access"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["start_h"] = "Hora";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["start_h"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["start_h"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["end_h"] = "Hora";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["end_h"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["end_h"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["name"] = "Nombre";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["name"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["name"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["last_name"] = "Apellido";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["last_name"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["last_name"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["document"] = "Documento";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["document"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["document"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["fk_id_advisor"] = "Asesor";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["fk_id_advisor"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["fk_id_advisor"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["fk_id_customer"] = "Cliente";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["fk_id_customer"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["fk_id_customer"] = "";
	$fieldLabelsconsulting_my_advisor["Spanish"]["fk_id_people"] = "Fk Id People";
	$fieldToolTipsconsulting_my_advisor["Spanish"]["fk_id_people"] = "";
	$placeHoldersconsulting_my_advisor["Spanish"]["fk_id_people"] = "";
	if (count($fieldToolTipsconsulting_my_advisor["Spanish"]))
		$tdataconsulting_my_advisor[".isUseToolTips"] = true;
}


	$tdataconsulting_my_advisor[".NCSearch"] = true;



$tdataconsulting_my_advisor[".shortTableName"] = "consulting_my_advisor";
$tdataconsulting_my_advisor[".nSecOptions"] = 0;

$tdataconsulting_my_advisor[".mainTableOwnerID"] = "";
$tdataconsulting_my_advisor[".entityType"] = 1;
$tdataconsulting_my_advisor[".connId"] = "postgres_at_localhost";


$tdataconsulting_my_advisor[".strOriginalTableName"] = "public.consulting";

	



$tdataconsulting_my_advisor[".showAddInPopup"] = false;

$tdataconsulting_my_advisor[".showEditInPopup"] = false;

$tdataconsulting_my_advisor[".showViewInPopup"] = false;

$tdataconsulting_my_advisor[".listAjax"] = false;
//	temporary
//$tdataconsulting_my_advisor[".listAjax"] = false;

	$tdataconsulting_my_advisor[".audit"] = false;

	$tdataconsulting_my_advisor[".locking"] = false;


$pages = $tdataconsulting_my_advisor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulting_my_advisor[".edit"] = true;
	$tdataconsulting_my_advisor[".afterEditAction"] = 1;
	$tdataconsulting_my_advisor[".closePopupAfterEdit"] = 1;
	$tdataconsulting_my_advisor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulting_my_advisor[".add"] = true;
$tdataconsulting_my_advisor[".afterAddAction"] = 1;
$tdataconsulting_my_advisor[".closePopupAfterAdd"] = 1;
$tdataconsulting_my_advisor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulting_my_advisor[".list"] = true;
}



$tdataconsulting_my_advisor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulting_my_advisor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulting_my_advisor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulting_my_advisor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulting_my_advisor[".printFriendly"] = true;
}



$tdataconsulting_my_advisor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulting_my_advisor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulting_my_advisor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulting_my_advisor[".isUseAjaxSuggest"] = true;

$tdataconsulting_my_advisor[".rowHighlite"] = true;



																		

$tdataconsulting_my_advisor[".ajaxCodeSnippetAdded"] = false;

$tdataconsulting_my_advisor[".buttonsAdded"] = false;

$tdataconsulting_my_advisor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulting_my_advisor[".isUseTimeForSearch"] = false;


$tdataconsulting_my_advisor[".badgeColor"] = "DAA520";


$tdataconsulting_my_advisor[".allSearchFields"] = array();
$tdataconsulting_my_advisor[".filterFields"] = array();
$tdataconsulting_my_advisor[".requiredSearchFields"] = array();

$tdataconsulting_my_advisor[".googleLikeFields"] = array();
$tdataconsulting_my_advisor[".googleLikeFields"][] = "id";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "start";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "end";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "fk_id_status_consulting";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "access";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "start_h";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "end_h";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "name";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "last_name";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "document";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "fk_id_advisor";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "fk_id_customer";
$tdataconsulting_my_advisor[".googleLikeFields"][] = "fk_id_people";



$tdataconsulting_my_advisor[".tableType"] = "list";

$tdataconsulting_my_advisor[".printerPageOrientation"] = 0;
$tdataconsulting_my_advisor[".nPrinterPageScale"] = 100;

$tdataconsulting_my_advisor[".nPrinterSplitRecords"] = 40;

$tdataconsulting_my_advisor[".geocodingEnabled"] = false;










$tdataconsulting_my_advisor[".pageSize"] = 20;

$tdataconsulting_my_advisor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulting_my_advisor[".strOrderBy"] = $tstrOrderBy;

$tdataconsulting_my_advisor[".orderindexes"] = array();


$tdataconsulting_my_advisor[".sqlHead"] = "SELECT \"public\".consulting.id,  \"public\".consulting.\"start\",  \"public\".consulting.\"end\",  \"public\".consulting.fk_id_status_consulting,  \"public\".consulting.\"access\",  \"public\".consulting.start_h,  \"public\".consulting.end_h,  \"public\".people.name,  \"public\".people.last_name,  \"public\".people.document,  \"public\".consulting.fk_id_advisor,  \"public\".consulting.fk_id_customer,  \"public\".advisor.fk_id_people";
$tdataconsulting_my_advisor[".sqlFrom"] = "FROM \"public\".consulting  INNER JOIN \"public\".advisor ON \"public\".consulting.fk_id_advisor = \"public\".advisor.id  INNER JOIN \"public\".customers ON \"public\".consulting.fk_id_customer = \"public\".customers.id  INNER JOIN \"public\".people ON \"public\".customers.fk_id_people = \"public\".people.id";
$tdataconsulting_my_advisor[".sqlWhereExpr"] = "";
$tdataconsulting_my_advisor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulting_my_advisor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulting_my_advisor[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulting_my_advisor[".highlightSearchResults"] = true;

$tableKeysconsulting_my_advisor = array();
$tableKeysconsulting_my_advisor[] = "id";
$tdataconsulting_my_advisor[".Keys"] = $tableKeysconsulting_my_advisor;


$tdataconsulting_my_advisor[".hideMobileList"] = array();




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


	$tdataconsulting_my_advisor["id"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "id";
//	start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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


	$tdataconsulting_my_advisor["start"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "start";
//	end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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


	$tdataconsulting_my_advisor["end"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "end";
//	fk_id_status_consulting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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


	$tdataconsulting_my_advisor["fk_id_status_consulting"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "fk_id_status_consulting";
//	access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	$vdata["hlType"] = 0;
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


	$tdataconsulting_my_advisor["access"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "access";
//	start_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
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
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
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


	$tdataconsulting_my_advisor["start_h"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "start_h";
//	end_h
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
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
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
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


	$tdataconsulting_my_advisor["end_h"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "end_h";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".people.name";

	
	
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


	$tdataconsulting_my_advisor["name"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".people.last_name";

	
	
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


	$tdataconsulting_my_advisor["last_name"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "last_name";
//	document
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "document";
	$fdata["GoodName"] = "document";
	$fdata["ownerTable"] = "public.people";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","document");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "document";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".people.document";

	
	
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


	$tdataconsulting_my_advisor["document"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "document";
//	fk_id_advisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	$edata["LookupTable"] = "public.advisor";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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


	$tdataconsulting_my_advisor["fk_id_advisor"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "fk_id_advisor";
//	fk_id_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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
	$edata["LinkFieldType"] = 3;
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


	$tdataconsulting_my_advisor["fk_id_customer"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "fk_id_customer";
//	fk_id_people
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fk_id_people";
	$fdata["GoodName"] = "fk_id_people";
	$fdata["ownerTable"] = "public.advisor";
	$fdata["Label"] = GetFieldLabel("public_consulting_my_advisor","fk_id_people");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "fk_id_people";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".advisor.fk_id_people";

	
	
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


	$tdataconsulting_my_advisor["fk_id_people"] = $fdata;
		$tdataconsulting_my_advisor[".searchableFields"][] = "fk_id_people";


$tables_data["public.consulting_my_advisor"]=&$tdataconsulting_my_advisor;
$field_labels["public_consulting_my_advisor"] = &$fieldLabelsconsulting_my_advisor;
$fieldToolTips["public_consulting_my_advisor"] = &$fieldToolTipsconsulting_my_advisor;
$placeHolders["public_consulting_my_advisor"] = &$placeHoldersconsulting_my_advisor;
$page_titles["public_consulting_my_advisor"] = &$pageTitlesconsulting_my_advisor;

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
//	public.payment_advisor
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.payment_advisor";
		$detailsParam["dOriginalTable"] = "public.payment";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "payment_advisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_payment_advisor");
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
			$strOriginalDetailsTable="public.status_consulting";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.status_consulting";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "status_consulting";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.consulting_my_advisor"][0] = $masterParams;
				$masterTablesData["public.consulting_my_advisor"][0]["masterKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][0]["masterKeys"][]="id";
				$masterTablesData["public.consulting_my_advisor"][0]["detailKeys"] = array();
	$masterTablesData["public.consulting_my_advisor"][0]["detailKeys"][]="fk_id_status_consulting";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulting_my_advisor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".consulting.id,  \"public\".consulting.\"start\",  \"public\".consulting.\"end\",  \"public\".consulting.fk_id_status_consulting,  \"public\".consulting.\"access\",  \"public\".consulting.start_h,  \"public\".consulting.end_h,  \"public\".people.name,  \"public\".people.last_name,  \"public\".people.document,  \"public\".consulting.fk_id_advisor,  \"public\".consulting.fk_id_customer,  \"public\".advisor.fk_id_people";
$proto0["m_strFrom"] = "FROM \"public\".consulting  INNER JOIN \"public\".advisor ON \"public\".consulting.fk_id_advisor = \"public\".advisor.id  INNER JOIN \"public\".customers ON \"public\".consulting.fk_id_customer = \"public\".customers.id  INNER JOIN \"public\".people ON \"public\".customers.fk_id_people = \"public\".people.id";
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
	"m_strName" => "start",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto8["m_sql"] = "\"public\".consulting.\"start\"";
$proto8["m_srcTableName"] = "public.consulting_my_advisor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "end",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto10["m_sql"] = "\"public\".consulting.\"end\"";
$proto10["m_srcTableName"] = "public.consulting_my_advisor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_status_consulting",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto12["m_sql"] = "\"public\".consulting.fk_id_status_consulting";
$proto12["m_srcTableName"] = "public.consulting_my_advisor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "access",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto14["m_sql"] = "\"public\".consulting.\"access\"";
$proto14["m_srcTableName"] = "public.consulting_my_advisor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "start_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto16["m_sql"] = "\"public\".consulting.start_h";
$proto16["m_srcTableName"] = "public.consulting_my_advisor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "end_h",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto18["m_sql"] = "\"public\".consulting.end_h";
$proto18["m_srcTableName"] = "public.consulting_my_advisor";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto20["m_sql"] = "\"public\".people.name";
$proto20["m_srcTableName"] = "public.consulting_my_advisor";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto22["m_sql"] = "\"public\".people.last_name";
$proto22["m_srcTableName"] = "public.consulting_my_advisor";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "document",
	"m_strTable" => "public.people",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto24["m_sql"] = "\"public\".people.document";
$proto24["m_srcTableName"] = "public.consulting_my_advisor";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto26["m_sql"] = "\"public\".consulting.fk_id_advisor";
$proto26["m_srcTableName"] = "public.consulting_my_advisor";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_customer",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto28["m_sql"] = "\"public\".consulting.fk_id_customer";
$proto28["m_srcTableName"] = "public.consulting_my_advisor";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.advisor",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto30["m_sql"] = "\"public\".advisor.fk_id_people";
$proto30["m_srcTableName"] = "public.consulting_my_advisor";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "public.consulting";
$proto33["m_srcTableName"] = "public.consulting_my_advisor";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "fk_id_advisor";
$proto33["m_columns"][] = "fk_id_customer";
$proto33["m_columns"][] = "start";
$proto33["m_columns"][] = "end";
$proto33["m_columns"][] = "fk_id_status_consulting";
$proto33["m_columns"][] = "access";
$proto33["m_columns"][] = "start_h";
$proto33["m_columns"][] = "end_h";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "\"public\".consulting";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "public.consulting_my_advisor";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "public.advisor";
$proto37["m_srcTableName"] = "public.consulting_my_advisor";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "fk_id_people";
$proto37["m_columns"][] = "fk_id_specialty";
$proto37["m_columns"][] = "created_by";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "updated_by";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "status";
$proto37["m_columns"][] = "commission";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN \"public\".advisor ON \"public\".consulting.fk_id_advisor = \"public\".advisor.id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "public.consulting_my_advisor";
$proto38=array();
$proto38["m_sql"] = "\"public\".consulting.fk_id_advisor = \"public\".advisor.id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_advisor",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= \"public\".advisor.id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "public.customers";
$proto41["m_srcTableName"] = "public.consulting_my_advisor";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "fk_id_people";
$proto41["m_columns"][] = "created_by";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "updated_by";
$proto41["m_columns"][] = "updated_at";
$proto41["m_columns"][] = "status";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN \"public\".customers ON \"public\".consulting.fk_id_customer = \"public\".customers.id";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "public.consulting_my_advisor";
$proto42=array();
$proto42["m_sql"] = "\"public\".consulting.fk_id_customer = \"public\".customers.id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_customer",
	"m_strTable" => "public.consulting",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= \"public\".customers.id";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "public.people";
$proto45["m_srcTableName"] = "public.consulting_my_advisor";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "name";
$proto45["m_columns"][] = "last_name";
$proto45["m_columns"][] = "birth_date";
$proto45["m_columns"][] = "created_by";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "updated_by";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "fk_type_doc";
$proto45["m_columns"][] = "document";
$proto45["m_columns"][] = "telf";
$proto45["m_columns"][] = "country";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN \"public\".people ON \"public\".customers.fk_id_people = \"public\".people.id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "public.consulting_my_advisor";
$proto46=array();
$proto46["m_sql"] = "\"public\".customers.fk_id_people = \"public\".people.id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fk_id_people",
	"m_strTable" => "public.customers",
	"m_srcTableName" => "public.consulting_my_advisor"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= \"public\".people.id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.consulting_my_advisor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulting_my_advisor = createSqlQuery_consulting_my_advisor();


	
		;

													

$tdataconsulting_my_advisor[".sqlquery"] = $queryData_consulting_my_advisor;



include_once(getabspath("include/consulting_my_advisor_events.php"));
$tableEvents["public.consulting_my_advisor"] = new eventclass_consulting_my_advisor;
$tdataconsulting_my_advisor[".hasEvents"] = true;

?>